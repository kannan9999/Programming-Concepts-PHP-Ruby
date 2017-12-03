class Queens
  @@board = Array.new(8){Array.new(8, 0)} #create 2d array of 0s

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

  def place_queens(numQueens, row)
      for col in 0..7
        if(isValid(row, col))
          @@board[row][col] = 1
          if(numQueens == 7 || self.place_queens(numQueens + 1, row + 1))
            return true;
          end
          @@board[row][col] = 0;
        end
      end
        return false;
  end

  def isValid(x, y)
    for i in 0..x-1
      if(@@board[i][y] == 1)
        return false
      end
      tx = x - 1 - i
      ty = y - 1 - i
        if(ty >= 0 && @@board[tx][ty] == 1)
          return false
        end
        ty = y + 1 + i;
          if(ty < 8 && @@board[tx][ty] == 1)
            return false
          end
    end
      return true
  end
end
queensObj = Queens.new
queensObj.place_queens(0, 0)
queensObj.print_board()