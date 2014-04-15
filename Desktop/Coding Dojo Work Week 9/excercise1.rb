puts ["ant", "bear", "cat"].any? {|word| word.length >= 3}

puts ["ant", "bear", "cat"].each {|word| print word, "--"}

puts (1..4).collect {|i| i*i}

puts (1..4).collect {"cat"}

puts (1..10).detect {|i| i % 5 == 0 and i % 7 == 0}

puts (1..100).detect {|i| i % 5 == 0 and i % 7 == 0}

puts (1..10).find_all {|i| i % 3 == 0}

puts 5.times {|i| print i}

puts 5.upto(10) {|i| print i, " "}

# puts "hello

puts "hello".split.inspect
# puts 123.to_a

# sample_string = "Hello Coding Dojo"

# puts sample_string.to_a

# numbers = [1, 2, 3, 4, 5]

# for i in numbers
# 	i++
# 	puts i
# end