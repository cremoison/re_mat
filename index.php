<?php
require_once './vendor/autoload.php';

use Dotenv\Dotenv;
use Src\Router;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

Router::handle($_SERVER);

/**
 * @todo COMPITI PER CASA
 * 
 * - Implementa pagina di registrazione funzionante
 *      aggiungi metodo ->saveUser dentro classe Repository.
 *          Il metodo deve prendere in input un oggetto User e la password come stringa
 *          fai la query che aggiunge la riga a users. ricordati che l'id è auto incrementale quindi non devi settarlo a mano
 *        
 *      aggiungi logica dentro views/logger.php per gestire la registrazione. così come hai fatto if(isset($_POST['login'])) puoi fare if(isset($_POST['register']))
 * 
 *      nota: prox lezione implementiamo astrazione per le views quindi la pagina in sé può anche fare schifo
 * 
 * - Implementa hash password
 *      modifica il metodo ->validate di Repository per controllare l'hash della password anziché la password in chiaro
 * 
 *      consiglio:  usa la funzione builtin password_hash('scemochilegge', PASSWORD_DEFAULT); // salvi questa nel db quando crei utente
 *                  per validare: password_verify('scemochilegge', $password_presa_da_db)
 *                  puoi provare un po' con questo sito https://onlinephp.io/password-hash https://onlinephp.io/password-verify
 * 
 * 
 */