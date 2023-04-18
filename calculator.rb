# print "Enter your first name: "
# first_name=gets.chomp

# print "Enter your last name: "
# last_name=gets.chomp

# full_name="#{last_name} #{first_name}"

# reverse_name=full_name.reverse()
# print "Hello #{reverse_name}\n"


# print "Enter first number: "
# fnum=gets.chomp.to_i

# print "Enter second number: "
# snum=gets.chomp.to_i

# puts "Addition of two Numbers is #{fnum+snum}\n"



# print "Enter your string: "
# str=gets.chomp

# uSTR = str.upcase();

# puts "Uppercase string: #{uSTR}"


# print "Enter first string: "
# str=gets.chomp

# print "Enter second string: "
# str1=gets.chomp

# if (str== str1)
#     print "String1 and String2 are equal\n";
# else
#     print "String1 and String2 are not equal\n";
# end



# print "Enter length of rectangle: "
# len=gets.chomp.to_i

# print "Enter breadth of rectangle: "
# bred=gets.chomp.to_i

# area= len*bred
# puts "Addition of two Numbers is #{area}\n"



# puts "\nDo While Loop:";
# cnt=0;
# loop do
#     print "#{cnt}  "
#     if cnt==20
#         break
#     end
#     cnt = cnt + 2
# end

# print "\n"




# print "Number of Elements: "
# n=gets.chomp.to_i
# arr=[]

# while n>0
# 	print "Enter number: "
# 	num=gets.chomp.to_i
# 	arr.push(num)
# 	n=n-1
# end

# item = arr.first();

# print "Array: ",arr,"\n";
# print "first item: ",item,"\n";



# print "Enter Base:-"
# base=gets.chomp.to_i

# print "Enter exponent:-"
# expo=gets.chomp.to_i

# power=base**expo
# puts "The power is #{power}"




# print "Enter the number:"
# num=gets.chomp.to_i
# count=0
# if (num==0)
# 	puts "0 is not prime"
# else
	
# 	i=2
# 	while(i<num)
# 		if (num%i==0)
# 			count+=1
# 		end
# 		i+=1
# 	end
	
# end
# 	if count>1
# 		puts "#{num} is not a prime number"
# 	else
# 		puts "#{num} is a prime number"
# 	end





print "Enter operation to perform\n 1) Addition 2) Subtraction 3) Multiplication 4) Division: "
choice = gets.chomp.to_i

print "Enter first Number: "
num1=gets.chomp.to_i

print "Enter second Number: "
num2=gets.chomp.to_i

case choice
when 1
   puts "Addition of the given two numbers is #{num1+num2}"; 
when 2
   puts " Subtraction of the given two numbers is #{num1-num2}"; 
when 3
   puts " Multiplication of the given two numbers is #{num1*num2}"; 
when 4
   puts " Division of the given two numbers is #{num1/num2}"; 
else
    puts "You have enter an invalid input operation";    
end

