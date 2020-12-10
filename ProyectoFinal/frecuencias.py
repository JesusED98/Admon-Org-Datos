import os
import json
import webbrowser

f = open ('datosCrudos.txt','r')
mensaje = f.read()

televisiores_cantidad = []

bandera = True
for value in mensaje:
    if bandera:
        televisiores_cantidad.append(value)
        if bandera:
            bandera = False
    else:
        bandera = True

personas_ordenadas = []

for posicion in range(len(televisiores_cantidad)):
  # print(televisiores_cantidad[posicion])
  numero = televisiores_cantidad.count(str(posicion))
  if numero > 0:
      personas_ordenadas.append(numero)

televisiores = {}

for posicion in range(len(personas_ordenadas)):
    televisiores[posicion] = personas_ordenadas[posicion]

archo_convertido_json = json.dumps(televisiores, sort_keys=True, indent=4)

print("Archivo convertido / creado")

archi1=open("datos.json","w")
archi1.write(archo_convertido_json)
archi1.close()

f.close()

webbrowser.open_new_tab("http://localhost/ProyectoFinal/src/")
