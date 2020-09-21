from pickle import Pickler
import pickle

name = 'Marishka'
website = 'http://programando.org'
english_french = {'paper':'papier', 'pen':'stylo', 'car':'voiture'}
tup = (31,'Fem',5.5)

with open('miArchivo2.bin', 'wb') as archivo:
    # para evitar cualquier problema, podemos utilizar un diccionario
    # para administrar los datos, de la siguiente manera:
    data = {'name':name, 'website':website,'english_french_dictionary':english_french,'tuple':tup}
    
    p = Pickler(archivo)
    print('escribiendo datos en miArchivo2.bin ... \n')
    p.dump(data)

# Para restaurar los datos pickled en el anterior script,
# podemos hacer lo siguiente:
with open('miArchivo2.bin', 'rb') as archivo:
    data = pickle.load(archivo)

print('Leyendo datos de miArchivo2.bin ... \n')
nombre = data['name']
sitio = data['website']
eng_fr = data['english_french_dictionary']
tupla = data['tuple']

print('Name: ', name)
print('Website: ', website)
print('English to French: ', english_french)
print('Tuple data: ', tup)
print('bye \n')
