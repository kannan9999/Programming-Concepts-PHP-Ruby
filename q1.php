<html>
<head><title>some title</title></head>
<body>
<form method="post" action="">
    <input type="number" min="1" max="9" name="textInput" value="<?= isset($_POST['textInput']) ? htmlspecialchars($_POST['textInput']) : '' ?>" />
    <input type="submit" name="submit" />
</form>

<?php
$moves = array(" "," "," "," "," "," "," "," "," ");

function printBoard($move_list){
    for ($i = 0; $i <= 8; $i++) {
        echo("|");
        echo($move_list[$i]);
        if($i == 2 || $i == 5 || $i == 8){
            echo("|<br>");
        }
    }
}

function x_move($move_list){
    if (!in_array(" ", $move_list)){
        exit("No more valid moves left. Game ends in a tie.<br>");
    }
    echo "Player X Turn. Choose a position on the board from 1 to 9.<br>";

    if(isset($_POST['submit'])) {
        $x_input =  htmlspecialchars($_POST['textInput']);
        while($move_list[$x_input - 1] != " "){
            echo "Invalid Move. Please enter the number of a free space on the board.<br>";
            $x_input =  htmlspecialchars($_POST['textInput']);
        }
        if($move_list[$x_input - 1] == " "){ //valid move
            $move_list[$x_input -1] = "X" ;
        }
        printBoard($move_list);
        //o_move($move_list);
    }
}
/*
function o_move($move_list){
    if (!in_array(" ", $move_list)){
        exit("No more valid moves left. Game ends in a tie.<br>");
    }
    echo "Player O Turn. Choose a position on the board from 1 to 9.<br>";

    if(isset($_POST['submit'])) {
        $o_input =  htmlspecialchars($_POST['textInput']);
        while($move_list[$o_input - 1] != " "){
            echo "Invalid Move. Please enter the number of a free space on the board.<br>";
            $o_input =  htmlspecialchars($_POST['textInput']);
        }
        if($move_list[$o_input - 1] == " "){ //valid move
            $move_list[$o_input -1] = "X" ;
        }
        printBoard($move_list);
        x_move($move_list);
    }
}
*/

printBoard($moves); //First print out the empty board
x_move($moves); //Begin with first player's turn

?>
</body>
<html>