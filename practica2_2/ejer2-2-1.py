miArchivo = open("poem.txt")
elTexto = miArchivo.read()
miPoemaBinario = bytes(elTexto, encoding="utf")

print(miPoemaBinario)

ascci_E = miPoemaBinario[0] # Valor ASCII del carácter E
ascci_l = miPoemaBinario[1] # Valor ASCII del carácter l

print(ascci_E)
print(ascci_l)

f = open("poema_binario.Xcosa", "wb")
f.write(miPoemaBinario)
f.close()