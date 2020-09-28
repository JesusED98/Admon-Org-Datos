import pickle

nombre = "Bartolo"
apellido = "Andropolis"
edad = 20
soltero = False
salario = 8523.50

registro = [nombre, apellido, edad, soltero, salario]

#Abre archivo binario para escribir(w) binario(b)
archivo = open('ArchivoX.xCosa', 'wb')

#Escribe datos en archivo
pickle.dump(registro, archivo)

archivo.close()