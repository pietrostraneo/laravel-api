# Esercizio del 2024-02-27


**nome repo: [laravel-one-to-many]**

Ciao ragazzi,

continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo.
Vi consiglio di far diventare momentaneamente su git la repo laravel_auth come template, ne create una nuova chiamata come indicato sopra a partire dalla repo template appena creata quindi clonatevi laravel_one_to_many in locale. A questo punto fate ridiventare laravel-auth una repo normale. Orao ricordatevi di eseguire i comandi composer install, npm install, copiatevi il file .env.example per creare un nuovo file .env ed inseritegli i parametri di connessione al database (il database rimane lo stesso, non cambia). Eseguite anche il comando php artisan key:generate.
Nel nuovo esercizio aggiungiamo una nuova entità Type. Questa entità rappresenta la tipologia di progetto ed è in relazione one to many con i progetti.

I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:
- create il model Type con la migration, seeder, store ed update request e resource controller ( -rcmsR )
- creare la migration di modifica per la tabella projects per aggiungere la chiave esterna
- aggiungere ai model Type e Project i metodi per definire la relazione one to many
- visualizzare nella pagina di dettaglio di un progetto la tipologia associata, se presente
- permettere all’utente di associare una tipologia nella pagina di creazione e modifica di un progetto
- gestire il salvataggio dell’associazione progetto-tipologia con opportune regole di validazione

### Bonus

aggiungere le operazioni CRUD per il model Type, in modo da gestire le tipologie di progetto direttamente dal pannello di amministrazione.

Buon lavoro e buon divertimento!



# Esercizio di oggi: Laravel Boolfolio - Project Technology


**nome repo: [laravel-many-to-many]**

Ciao ragazzi,

continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo e aggiungiamo una nuova entità Technology. Questa entità rappresenta le tecnologie utilizzate ed è in relazione many to many con i progetti.
Come ieri, rendete momentaneamente la repo laravel-one-to-many una repo di template, quindi create quella nuova, clonatela in locale e quindi riportate la repo di ieri a normale.

I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:

- Creare il model Technology con relativa  migration, seeder ecc (-rcmsR)
- Creare la migration per la tabella pivot project_technology
- Aggiungere ai model Technology e Project i metodi per definire la relazione many to many
- Visualizzare nella pagina di dettaglio di un progetto le tecnologie utilizzate, se presenti
- Permettere all’utente di associare le tecnologie nella pagina di creazione e modifica di un progetto

### Bonus:

aggiungere le operazioni CRUD per il model Technology, in modo da gestire le tecnologie utilizzate nei progetti direttamente dal pannello di amministrazione.