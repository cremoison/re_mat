<?php
// require_once './vendor/autoload.php';

namespace Src;
use PDO;
use Src\DataObjects\User;

class Repository
{
    private PDO $db;
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function query($q): array
    {
        /**
         * @todo
         * 
         * ========== ESERCIZI PER CASA (in ordine di priorità) ==========
         *
         * Non istanziare una nuova connessione ogni volta che viene fatta una query (lento e poco sicuro), o la
         * istanzi nel costruttore o la istanzi all'esterno della classe per poi passarla all'istanza individuale di
         * Repository tramite il costruttore
         * 
         * Rifattorizza per usare .env al posto delle variabili per la connessione al db
         * 
         * Rifattorizza per usare PDO al posto di mysqli 
         * 
         * Aggiungi la visibilità ai metodi, i return type, i tipi delle proprietà delle classi, i tipi dei
         * parametri dei metodi ecc ecc
         * 
         * Come conseguenza di usare PDO: impara cos'è il binding nelle query con PDO (serve a prevenire SQL injection)
         * 
         * Per queste modifiche indicate parti da questo stesso branch e fai quello che c'è da fare. Quando leggerai questo
         * mi avrai già dato i permessi di scrittura per la repo quindi potremo guardare direttamente sulla PR le modifiche
         * che avrai fatto comparando questo commit attuale con ciò che avrai fatto tu
         * 
         * ========== NOTE VARIE ==========
         * 
         * I todo segnali con la chiocciola @todo (invece di TO-DO) così l'editor te li evidenzia e ti avvisa prima di committare
         * Lasciare commenti con la chiocciola ha certe implicazioni in diversi casi (si chiamano PHPdocs o docblocks, poi te li spiego)
         * 
         * Fammi sapere se hai bisogno di aiuto: imparare cosa, come e quando chiedere aiuto o informazioni è una componente
         * fondamentale di questo lavoro quindi ti conviene abituarti a farlo sia per formazione tecnica che per pace mentale
         * 
         * Con questo progetto, per aiutarti a entrare più in fretta nelle dinamiche di scrittura di codice enterprise,
         * simuliamo una dinamica project manager / impiegato. Tratta questi commenti che ti lascio e le issue che ti
         * apro su github (anche in futuro ovviamente) come se fossero parte del processo di code review in ditta, ovvero
         * discutiamone quando necessario, chiedi chiarimenti quando non hai capito cosa è che ti viene contraddetto,
         * se chi ti ha aperto issue ha evidentemente ragione (es. errori di distrazione o di logica) fai e basta ciò che
         * viene consigliato ma quando non sei d'accordo non avere paura di farlo sapere, sia ai tuoi pari che ai tuoi
         * superiori (in generale). Questa roba serve anche ad aiutarti a capire se e quanto ti può piacere fare questo lavoro.
         * 
         * In bocca al lupo e in culo alla balena
         * 
         * - Egi
         */


        // @TODO PDO implementation
    }

    public function getUserById(int $id): User
    {

    }

}

?>