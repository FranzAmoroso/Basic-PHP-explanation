<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazioni</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <p><?php require '../../data.php' ?></p>
    <div class="cont">
        <span>
            <h3>Accesso</h3>
            <form method="post" action="acesso.php">
                <label for="nome">name</label>
                <input type="text" name="nome" id="nome">
                <label for="cognome">surname</label>
                <input type="text" name="cognome" id="cognome">
                <input class="invia" type="submit" value="Vai a..">
            </form>
        </span>
    </div>
</body>

</html>