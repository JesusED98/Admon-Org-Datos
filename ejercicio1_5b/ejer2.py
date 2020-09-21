# Jesus Roberto Estrada Diaz
# 17231071
# Practica 1.6
# creacion de un arrchivo binario metodod 2

# importamos el modulo pickle
from pickle import Pickler

print("Usando Pickle para escribir un archivo binario")

# creamos algunos datos
name = 'Marishka'
website = 'http://programando.org'
english_french = {'paper':'papier', 'pen':'stylo', 'car':'voiture'} # diccionario
tup = (31,'Fem',5.5) # tupla

# creamos archivo binario
# utilizamos otra manera tambien de manipular archivos
# utilizando 'with' nos ahorramos el uso del close(),
# ya que se encarga de cerrar el archivo y liberar sus recursos
# (incluso si ocurre cualquier error)
with open('miArchivo.dat', 'wb') as archivo:
    # creamos objeto p de la clase Pickler y
    # como parámetro al constructor, el archivo
    p = Pickler(archivo)
    
    # vamos añadiendo los datos al archivo
    p.dump(name)
    p.dump(website)
    p.dump(english_french)
    p.dump(tup)
    
