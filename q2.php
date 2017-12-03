<?php
class Queens{
    private $board = array();

    function __construct(){
        for($i = 0;$i < 8; $i++){
            $this->board[$i] = array_fill(0,8,0);
        }
    }

    function print_board(){
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

    function place_queens($numQueens, $r)
    {
        for ($c = 0; $c < 8; $c++) {
            if ($this->valid($r, $c)) {
                $this->board[$r][$c] = 1;

                if ($numQueens === 7 || $this->place_queens($numQueens + 1, $r + 1) === true) {
                    return true;
                }
                $this->board[$r][$c] = 0;
            }
        }
        return false;
    }

    function valid($x, $y)
    {
        for ($i = 0; $i < $x; $i++) {
            if ($this->board[$i][$y] === 1) {
                return false;
            }
            $tx = $x - 1 - $i;
            $ty = $y - 1 - $i;
            if (($ty >= 0) && ($this->board[$tx][$ty] === 1)) {
                return false;
            }
            $ty = $y + 1 + $i;
            if (($ty < 8) && ($this->board[$tx][$ty] === 1)) {
                return false;
            }
        }
        return true;
    }
}
//place_queens(0, 0);
//print_board();
$queensObj = new Queens;
$queensObj->place_queens(0,0);
$queensObj->print_board();
?>