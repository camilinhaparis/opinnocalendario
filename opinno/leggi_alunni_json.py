import json

# Apri e leggi il file JSON
with open('alunni.json', 'r') as file:
    dati_alunni = json.load(file)

# Stampa il contenuto del file JSON in modo leggibile
print(json.dumps(dati_alunni, indent=4))
