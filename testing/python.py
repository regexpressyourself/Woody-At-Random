file = open("newfile.txt", "r")
new_file = open("table.txt","w")
myStr = ""
counter = 0
for line in file:
    if (counter == 0):
        myStr += "("
        myStr += "'"
        myStr += line
        myStr += "'"
        myStr += ", "
    elif (counter == 1):
        myStr += "'"
        myStr += line
        myStr += "'"
        myStr += ", "
    elif (1<counter<5):
        if (line == "Yes"):
            myStr += "1"
        elif (line == "No"):
            myStr += "0"

        if (counter == 4):
            myStr += "), "
        else:
            myStr += ", "
    if (counter == 4):
        counter = 0
    else:
        counter += 1


print myStr



