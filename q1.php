<?php
$moves = array(" "," "," "," "," "," "," "," "," ");
function printBoard($move_list){
    for ($i = 0; $i <= 8; $i++) {
        echo("|");
        echo($move_list[$i]);
        if($i == 2 || $i == 5 || $i == 8){
            echo("|\n");
        }
    }
}
function x_move($move_list){
    if (!in_array(" ", $move_list)){
        exit("No more valid moves left. Game ends in a tie.\n");
    }
    echo "Player X Turn. Choose a position on the board from 1 to 9.\n";
    $x_input = readline("Command: ");
    while($x_input < 1 || $x_input > 9){ //while x input out of scope
        echo "Invalid Input. Please enter a number between 1-9.\n";
        $x_input = readline("Command: ");
    }
    while($move_list[$x_input - 1] != " "){  //while x input not free
        echo "Invalid Move. Please enter the number of a free space on the board.\n";
        $x_input = readline("Command: ");
    }
    if($move_list[$x_input - 1] == " "){ //valid move
        $move_list[$x_input - 1] = "X" ;
    }
    printBoard($move_list);
    check_x_winner($move_list);
    o_move($move_list);
}
function o_move($move_list){
    if (!in_array(" ", $move_list)){
        exit("No more valid moves left. Game ends in a tie.\n");
    }
    echo "Player O Turn. Choose a position on the board from 1 to 9.\n";
    $o_input = readline("Command: ");
    while($o_input < 1 || $o_input > 9){ //while o input out of scope
        echo "Invalid Input. Please enter a number between 1-9.\n";
        $o_input = readline("Command: ");
    }
    while($move_list[$o_input - 1] != " "){  //while o input not free
        echo "Invalid Move. Please enter the number of a free space on the board.\n";
        $o_input = readline("Command: ");
    }
    if($move_list[$o_input - 1] == " "){ //valid move
        $move_list[$o_input - 1] = "O" ;
    }
    printBoard($move_list);
    check_o_winner($move_list);
    x_move($move_list);
}
function check_x_winner($move_list){
    //Check horizontal winning conditions
    if($move_list[0] == "X" && $move_list[1] == "X" && $move_list[2] == "X"){
        exit("Game over. Player X is the winner!\n");
    }
    if($move_list[3] == "X" && $move_list[4] == "X" && $move_list[5] == "X"){
        exit("Game over. Player X is the winner!\n");
    }
    if($move_list[6] == "X" && $move_list[7] == "X" && $move_list[8] == "X"){
        exit("Game over. Player X is the winner!\n");
    }
    #Check vertical winning conditions
    if($move_list[0] == "X" && $move_list[3] == "X" && $move_list[6] == "X"){
        exit("Game over. Player X is the winner!\n");
    }
    if($move_list[1] == "X" && $move_list[4] == "X" && $move_list[7] == "X"){
        exit("Game over. Player X is the winner!\n");
    }
    if($move_list[2] == "X" && $move_list[5] == "X" && $move_list[8] == "X"){
        exit("Game over. Player X is the winner!\n");
    }
    #Check diagonal winning conditions
    if($move_list[0] == "X" && $move_list[4] == "X" && $move_list[8] == "X"){
        exit("Game over. Player X is the winner!\n");
    }
    if($move_list[2] == "X" && $move_list[4] == "X" && $move_list[6] == "X"){
        exit("Game over. Player X is the winner!\n");
    }
}
function check_o_winner($move_list){
    //Check horizontal winning conditions
    if($move_list[0] == "O" && $move_list[1] == "O" && $move_list[2] == "O"){
        exit("Game over. Player O is the winner!\n");
    }
    if($move_list[3] == "O" && $move_list[4] == "O" && $move_list[5] == "O"){
        exit("Game over. Player O is the winner!\n");
    }
    if($move_list[6] == "O" && $move_list[7] == "O" && $move_list[8] == "O"){
        exit("Game over. Player O is the winner!\n");
    }
    #Check vertical winning conditions
    if($move_list[0] == "O" && $move_list[3] == "O" && $move_list[6] == "O"){
        exit("Game over. Player O is the winner!\n");
    }
    if($move_list[1] == "O" && $move_list[4] == "O" && $move_list[7] == "O"){
        exit("Game over. Player O is the winner!\n");
    }
    if($move_list[2] == "O" && $move_list[5] == "O" && $move_list[8] == "O"){
        exit("Game over. Player O is the winner!\n");
    }
    #Check diagonal winning conditions
    if($move_list[0] == "O" && $move_list[4] == "O" && $move_list[8] == "O"){
        exit("Game over. Player O is the winner!\n");
    }
    if($move_list[2] == "O" && $move_list[4] == "O" && $move_list[6] == "O"){
        exit("Game over. Player O is the winner!\n");
    }
}
printBoard($moves); //First print out the empty board
x_move($moves); //Begin with first player's turn (X)
?>