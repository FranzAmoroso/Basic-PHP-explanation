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
            <h3>Cosa sono i COOKIE</h3>
            <form method="post" action="cosa_sono_i_cookie.php">
                <input class="invia" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>Salvare un cookie setcookie()</h3>
            <form method="post" action="setcookie().php">
                <label for="name">Name</label>
                <input type="text" name="name">
                <label for="cognome">Cognome</label>
                <input type="text" name="cognome" id="cognome">
                <input class="invia" type="submit" value="Crea Cookie">
            </form>
        </span>

        <span>
            <h3>Accedere ai cookie salvati $_COOKIE["name"]</h3>
            <form method="post" action="$_COOKIE[_].php">
                <input class="const" type="submit" value="Accedi ai Cookie Salvati">
            </form>
        </span>

        <span>
            <h3>rimuovere un cookie setcookie(name, expire al passato)</h3>
            <form method="post" action="rimuovere_dei_cookie.php">
                <input class="const" type="submit" value="Rimuovi i Cookie">
            </form>
        </span>
      </div>
</body>

</html>