#CSI3130 - Assignment4 - Part1
#Question 2: Queens Placement in Ruby

class Queens
  @@board = Array.new(8){Array.new(8, 0)} #Create 2d array of 0s of size 8x8

  #Method to output the board on the screen
  def print_board
    puts "________________________"
    for i in 0..7
      for j in 0..7
        if(@@board[i][j] == 1)
          print("|Q|")
        else
          print("|_|")
        end
      end
      puts
    end
  end
  #Method which places 1 on board for queen or 0 for an empty place
  def place_queens(numQueens, row)
      for col in 0..7
        if(isValid(row, col))
          @@board[row][col] = 1 #If this cell isValid, place a queen
          if(numQueens == 7 || self.place_queens(numQueens + 1, row + 1))
            return true; #If this is the last queen
          end
          @@board[row][col] = 0; #Else we will backtrack and replace this queen so set to empty place
        end
      end
        return false;
  end

  def isValid(x, y)
    for i in 0..x-1
      #Check if another queen in same column
      if(@@board[i][y] == 1)
        return false
      end
      #Check if there is another queen in the diagonals
      dx = x - 1 - i
      dy = y - 1 - i
      #Check left to right diagonal \
        if(dy >= 0 && @@board[dx][dy] == 1)
          return false
        end
      #Check right to left diagonal /
        dy = y + 1 + i;
          if(dy < 8 && @@board[dx][dy] == 1)
            return false
          end
    end
      return true
  end
end
queensObj = Queens.new #Create new queen object
queensObj.place_queens(0, 0) #Place queens
queensObj.print_board() #Display the board