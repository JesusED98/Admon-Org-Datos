import random 
f = open("datos.txt", "w")
pruebas=int(input("¿Cuantas pruebas de pH hizo?"))
for x in range(pruebas):
    pH=round(random.uniform(0.0,20.0),1)
    if (x+1) < pruebas:
        f.write(f"{pH}\n")
    else:
        f.write(f"{pH}")
f.close()

