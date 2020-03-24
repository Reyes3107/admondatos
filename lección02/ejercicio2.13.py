import pickle

nombre = "Katerina"
apellido = "Rostova"
edad = 20
soltero = False
salario = 2689.50

registro = [nombre,apellido,edad,soltero,salario]

archivo = open("unArchivoCualquiera.xcosa", "wb")

pickle.dump(registro,archivo)

archivo.close()