import json

# Lista degli alunni
alunni = [
    "Dmytro Liashuk",
    "Steve Kenfack Tsiguia",
    "Alberto Nibbi",
    "Alessandro Del Vescovo",
    "Alessia Maria Recupero",
    "Andrea Mancin",
    "Camila Parise",
    "Carmine Santella",
    "Davide Traina",
    "Ester Pilato",
    "Gabriele Lirangi",
    "Giacomo Giraldi",
    "Jacopo Tei",
    "Juvelanie Gabrel Kaprture Chedom",
    "Marcello Andrea Licciardello",
    "Marenza Verova",
    "Matteo Banfi",
    "Paolo Arcuri",
    "Pierre Tine",
    "Ralf Allen Dela Cruz Barcebal",
    "Stefano Bua"
]

# Lista di nomi per ogni alunno
dati_alunni = [
    {
        "nome": alunno,
        "password": "",  # La password dovrà essere impostata successivamente
        "corso": "corso_AWS_002PROTD2439829"
    }
    for alunno in alunni
]

# Scrittura del file JSON
with open('alunni.json', 'w') as file:
    json.dump(dati_alunni, file, indent=4)

print("File JSON creato con successo!")
