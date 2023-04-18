#indroduction

number_of_dishes=int(input())
dish_info=[]
# dish_info_dict={}
for i in range(number_of_dishes):
    temp=[j.strip() for j in input().split(",")]
    dish_info.append(temp)



print("Output\n")


# print(dish_info)

print("\n")
for i in dish_info:
    print(", ".join(i))



#problem 2

n=int(input())
dish_names=[j.strip() for j in input().split(",")]
print(dish_names)
price=0
for i in dish_names:
    # for k in range(number_of_dishes):
    for j in dish_info:
        if j[0]==i:
            if j[1]=="Starters" or j[1]=="Main Courses":
                #gst=5
                price=price+int(j[3])+int(j[3])*0.05
            if j[1]=="Bevarages":
                if j[2]=="Alcolohic":
                    price=price+ int(j[3])+int(j[3])*0.18
            if j[1]=="Desserts":
                price=price+ int(j[3])+int(j[3])*0.1

#
print(price)
    
    
# # def main():
# #     print("Hello World")
#     pass




# if __name__ == "__main__":
#     main()




# 3
# Paneer 65, Watermelon Martini, Cosmopolitan



# 4
# Paneer 65, Starters, Veg, 200
# Puneri Chicken, Main Courses, Non-Veg, 400
# Watermelon Martini, Beverages, Non-Alcoholic, 150
# Cosmopolitan, Bevarages, Alcoholic, 200