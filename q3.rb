#CSI3130 - Assignment4 - Part1
#Question 3: Estimate the value of pi in Ruby using random points

iters = 1000000.0 #Number of iterations to run
radius = 1.0
count = 0; #Keep track of number of points in the circle

for i in 0..(iters - 1)
    x = rand(0..1);
    y = rand(0..1);
    coords = (x * x) + (y * y);
    #If coordinates are within circle, increment count
    if (coords <= radius * radius)
        count = count + 1
    end
end
#Estimate pi as the count within the circle divided by the count in the square(which is all points, so # of iterations)
pi = (count * 4.0) / iters;

puts("The number of points in the square is: " + iters.to_s)
puts("The number of points inside the circle is: " + count.to_s)
puts("The estimation of pi is: " + pi.to_s)