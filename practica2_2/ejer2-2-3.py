import pickle
# Abr archivo binario para leer(r) binario(b)
archivo = open('ArchivoX.xCosa', 'rb')

# carga datos desde archivo
datos = pickle.load(archivo)

# Muestra datos
print(datos)

# Cierra archivo
archivo.close()