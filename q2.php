<?php
#CSI3130 - Assignment4 - Part1
#Question 2: Queens Placement in PHP

class Queens
{
    private $board = array(); //Create an empty array to store the board
    //Initialize the board as a 2d 8x8 array of 0s
    function __construct()
    {
        for ($i = 0; $i < 8; $i++) {
            $this->board[$i] = array_fill(0, 8, 0);
        }
    }
    //Function to output the board, with 1s as Queens and 0s as empty spaces
    function print_board()
    {
        echo "________________________\n";
        for ($r = 0; $r < 8; $r++) {
            for ($c = 0; $c < 8; $c++) {
                if ($this->board[$r][$c] === 1) {
                    echo '|Q|';
                } else {
                    echo '|_|';
                }
            }

            echo "\n";
        }
    }
    //Function to place queens in a valid arrangement on the board
    function place_queens($numQueens, $r)
    {
        for ($c = 0; $c < 8; $c++) {
            if ($this->isValid($r, $c)) {
                //If this cell is a valid arrangement, place the queen (1)
                $this->board[$r][$c] = 1;

                if ($numQueens === 7 || $this->place_queens($numQueens + 1, $r + 1) === true) {
                    return true; //If we have reached the last queen
                }
                $this->board[$r][$c] = 0; //Empty space otherwise
            }
        }
        return false;
    }
    //Check if queen is being placed in valid location (used in place_queens function)
    function isValid($x, $y)
    {
        for ($i = 0; $i < $x; $i++) {
            if ($this->board[$i][$y] === 1) {
                //There is another queen in the same column
                return false;
            }
            //Check if there is another queen in diagonals
            $dx = $x - 1 - $i;
            $dy = $y - 1 - $i;
            if (($dy >= 0) && ($this->board[$dx][$dy] === 1)) {
                //There is another queen in the left to right diagonal \
                return false;
            }
            $dy = $y + 1 + $i;
            if (($dy < 8) && ($this->board[$dx][$dy] === 1)) {
                //There is another queen in the right to left diagonal
                return false;
            }
        }
        return true;
    }
}
$queensObj = new Queens; //Create new queen object
$queensObj->place_queens(0, 0); //Place the queens
$queensObj->print_board(); //Display the board
?>