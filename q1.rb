  moves = Array[" "," "," "," "," "," "," "," "," "]

 def print_board(move_list)
   for i in 0..8
     print("|")
     print(move_list[i])
     if(i == 2 || i == 5 || i == 8)
       print("|")
       puts("")
     end
   end
 end

  def x_move(move_list)
    if(move_list.include?(" ") == false)
      abort("Game ended. No more moves available on the board. Game ends in a tie")
    end
    puts("Player X Turn. Choose a position on the board from 1-9")
    x_input = gets()
    while(x_input.to_i < 1 || x_input.to_i > 9)
      puts("Invalid Input. Please enter a number between 1-9")
      x_input = gets()
    end
    while(move_list[x_input.to_i - 1] != " " )
      puts("Invalid Move. Please enter the number of a free space on the board")
      x_input = gets()
    end
    if(move_list[x_input.to_i - 1] == " ")
      move_list[x_input.to_i - 1] = 'X'
    end
    print_board(move_list)
    check_x_winner(move_list)
    o_move(move_list)
  end

  def o_move(move_list)
    if(move_list.include?(" ") == false)
      abort("Game ended. No more moves available on the board. Game ends in a tie")
    end
    puts("Player O Turn. Choose a position on the board from 1-9")
    o_input = gets()
    while(o_input.to_i < 1 || o_input.to_i > 9)
      puts("Invalid Input. Please enter a number between 1-9")
      o_input = gets()
    end
    while(move_list[o_input.to_i - 1] != " " )
     puts("Invalid Move. Please enter the number of a free space on the board")
     o_input = gets()
    end
    if(move_list[o_input.to_i - 1] == " ")
      move_list[o_input.to_i - 1] = 'O'
    end
    print_board(move_list)
    check_o_winner(move_list)
    x_move(move_list)
  end

  def check_x_winner(move_list)
    #Check horizontal winning conditions
    if(move_list[0] == "X" && move_list[1] == "X" && move_list[2] == "X")
      abort("Game over. Player X is the winner!")
    end
    if(move_list[3] == "X" && move_list[4] == "X" && move_list[5] == "X")
      abort("Game over. Player X is the winner!")
    end
    if(move_list[6] == "X" && move_list[7] == "X" && move_list[8] == "X")
      abort("Game over. Player X is the winner!")
    end
    #Check vertical winning conditions
    if(move_list[0] == "X" && move_list[3] == "X" && move_list[6] == "X")
      abort("Game over. Player X is the winner!")
    end
    if(move_list[1] == "X" && move_list[4] == "X" && move_list[7] == "X")
      abort("Game over. Player X is the winner!")
    end
    if(move_list[2] == "X" && move_list[5] == "X" && move_list[8] == "X")
      abort("Game over. Player X is the winner!")
    end
    #Check diagonal winning conditions
    if(move_list[0] == "X" && move_list[4] == "X" && move_list[8] == "X")
      abort("Game over. Player X is the winner!")
    end
    if(move_list[2] == "X" && move_list[4] == "X" && move_list[6] == "X")
      abort("Game over. Player X is the winner!")
    end
  end

  def check_o_winner(move_list)
    #Check horizontal winning conditions
    if(move_list[0] == "O" && move_list[1] == "O" && move_list[2] == "O")
      abort("Game over. Player O is the winner!")
    end
    if(move_list[3] == "O" && move_list[4] == "O" && move_list[5] == "O")
      abort("Game over. Player O is the winner!")
    end
    if(move_list[6] == "O" && move_list[7] == "O" && move_list[8] == "O")
      abort("Game over. Player O is the winner!")
    end
    #Check vertical winning conditions
    if(move_list[0] == "O" && move_list[3] == "O" && move_list[6] == "O")
      abort("Game over. Player O is the winner!")
    end
    if(move_list[1] == "O" && move_list[4] == "O" && move_list[7] == "O")
      abort("Game over. Player O is the winner!")
    end
    if(move_list[2] == "O" && move_list[5] == "O" && move_list[8] == "O")
      abort("Game over. Player O is the winner!")
    end
    #Check diagonal winning conditions
    if(move_list[0] == "O" && move_list[4] == "O" && move_list[8] == "O")
      abort("Game over. Player O is the winner!")
    end
    if(move_list[2] == "O" && move_list[4] == "O" && move_list[6] == "O")
      abort("Game over. Player O is the winner!")
    end
  end

  print_board moves #print the empty board at the start of the game
  x_move moves #begin x player's turn and start game loop