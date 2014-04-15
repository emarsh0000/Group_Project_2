array = [3, 5, 1, 2, 7, 9, 8, 13, 25, 32]
# sum = 0
# array.each {|a| sum+=a}
array = array.find_all {|i| - 10 >= 0}
print array

