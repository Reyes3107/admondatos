import pickle

archivo = open("unArchivoCualquiera.xcosa","rb")

datos = pickle.load(archivo)
               
print(datos)

archivo.close()