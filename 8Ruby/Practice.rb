# Reverse String 

# print "Please enter your first name: "
# first_name = gets.chomp

# print "Please enter your last name: "
# last_name = gets.chomp

# fullname= "#{last_name} #{first_name}"
# print "#{fullname.reverse()}"

#OUTPUT
# aytida yebud

#Addition of two Numbers

# print "Please enter your First Number: "
# first_num = gets.chomp.to_i

# print "Please enter your Second Number: "
# second_num = gets.chomp.to_i

# print "Addition of #{first_num} and #{second_num} is : #{first_num + second_num}"


#Read an integer number from the user and check 
#input number is "EVEN" or "ODD" using the if statement.


# print "Enter number: ";
# num = gets.chomp.to_i;  

# if(num%2 == 0)
#     print ("Number is EVEN");
# end

# if(num%2 != 0)
#     print ("Number is ODD");
# end


# Program to find the area of the rectangle

# print "Enter length: "
# length = gets.chomp.to_f
# print "Enter width: "
# width = gets.chomp.to_f
 
# area=length*width

# print "Area of Rectangle is #{area}"


# Program to convert string to uppercase

# print "Enter your String: "
# str = gets.chomp

# print str.upcase()

#

# program to print numbers from 1 to 5 using 
# for loop, while, and do...while loop.

# Ruby program to print numbers from 1 to 5 
# using the for loop, while, and do loop

# print "For Loop:";
# for cnt in 1..5 do   
#   print cnt," ";   
# end   

# print "\nWhile Loop:";
# cnt=1;
# while cnt<=5
#   print cnt," "; 
#   cnt = cnt + 1;
# end   

# print "\nDo While Loop:";
# cnt=1;
# loop do
#     print cnt," "; 
#     if cnt==5
#         break;
#     end
#     cnt = cnt + 1;
# end




# program to find the greatest of three numbers.

# print "Enter First number: ";
# x = gets.chomp.to_i;  

# print "Enter Second Number: "
# y= gets.chomp.to_i

# print "Enter Third Number: "
# z= gets.chomp.to_i

# if x >= y and x >= z
#      puts "x = #{x} is greatest."
# elsif y >= z and y >= x 
#      puts "y = #{y} is greatest."
# else 
#      puts "z = #{z} is greatest."
# end



# # Program to create an array using Array class.

# arr = Array(101..105);
# i=0;
# print "Array elements: ";
# while(i<5)
#     puts arr[i];
#     i = i + 1;
# end

# # program to create an array using literal constructor [].

# print"\n" 
# arr = [101,"Aditya",15000];
# i=0;
# while(i<3)
#     puts arr[i];
#     i = i + 1;
# end



#Ruby program to check whether the given number is prime or not.

# print "Enter the number: "
# num=gets.chomp.to_i
# count=0
# if (num==0)
# 	print "0 is not prime"
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
# 		print "#{num} is not a prime number"
# 	else
# 		print "#{num} is a prime number"
# 	end



#Ruby program to print Fibonacci series without recursion

first=0
second=1
nextterm=0

print "Enter the number of terms: "
n=gets.chomp.to_i

print "The first #{n} terms of Fibonacci series are: "
c=1
while(c<=n+1)
	if(c<=1)
		nextterm=c
	else
		puts nextterm
		nextterm=first+second
		first=second
		second=nextterm
	end
	c+=1
end

















