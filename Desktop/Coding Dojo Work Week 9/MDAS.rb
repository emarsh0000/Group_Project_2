# first_number = rand(100)
# second_number = rand(100)
# operation = rand(1..4) 

# case operation
# 	when 1
# 		answer = first_number+second_number 
# 		operation = "Addition"
# 	when 2
# 		answer = first_number-second_number
# 		operation = "Subtraction"
# 	when 3
# 		answer = first_number*second_number
# 		operation = "Multiplication"
# 	when 4
# 		answer = first_number/second_number
# 		operation = "Division"

# end

# print "The answer is " , answer , ". Operation used is " , operation

###############
puts "Type a number. Then press return. Then enter another number and press return."
first_number = gets.chomp.to_i #asks the user for a number
second_number = gets.chomp.to_i
operation = rand(1..4) 

case operation
	when 1
		answer = first_number+second_number 
		operation = "Addition"
	when 2
		answer = first_number-second_number
		operation = "Subtraction"
	when 3
		answer = first_number*second_number
		operation = "Multiplication"
	when 4
		answer = first_number/second_number
		operation = "Division"
		if first_number < second_number
			answer = "a fraction of 1, Oops"
			
		end

end

print "The answer is " , answer , ". Operation used is " , operation
