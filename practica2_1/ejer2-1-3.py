f = open("poem.txt", "r")
print ("1:",f.readlines()) 
print ("2:",f.readlines()) # EOF alcanzado
f.close()