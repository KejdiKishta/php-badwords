<!-- Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <form action="result.php">
        <h4>Inserisci i seguenti dati</h4>
        <textarea type="text" name="string" placeholder="Inserisci il testo"></textarea>
        <input type="text" name="restrict" placeholder="Inerisci la parola che vuoi censurare">
        <button type="submit">Invia</button>
    </form>
</body>
</html>
