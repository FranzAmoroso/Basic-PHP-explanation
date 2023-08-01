<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazioni</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <p><?php require '../data.php' ?></p>
    <div class="cont">
        <span>
            <h3>Cosa sono le sessioni</h3>
            <form method="post" action="cosa_sono_le_sessioni.php">
                <input class="invia" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>Cominciare una sessione session_start()</h3>
            <form method="post" action="session_start().php">
                <input class="invia" type="submit" value="Comincia Sessione">
            </form>
        </span>

        <span>
            <h3>Salvare e Accedere ai dati della sessione salvati $_SESSION["var"]</h3>
            <form method="post" action="$_SESSION[_].php">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
                <label for="cognome">Cognome</label>
                <input type="text" name="cognome" id="cognome">
                <input class="const" type="submit" value="Salva e Accedi ai Sessione Salvati">
            </form>
        </span>

        <span>
            <h3>Rimuovere dati da una sessione unset($_SESSION["var"])</h3>
            <form method="post" action="rimuovere_dei_dati_di_una_sessione.php">
                <input class="const" type="submit" value="Rimuovi dati di una sessione">
            </form>
        </span>

        <span>
            <h3>distruggere dei dati da una sessione unset($_SESSION["var"])</h3>
            <form method="post">
                <p>session_destroy();</p>
                <input class="const" type="submit" value="Distruggi i dati di una sessione">
            </form>
        </span>
      </div>
</body>
