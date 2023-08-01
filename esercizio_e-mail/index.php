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
            <h3>Mandare un E-mail</h3>
            <form method="post" action="mandare_una_e-mail.php">
                <input class="invia" type="submit" value="Invia">
            </form>
        </span>

        <span>
            <h3>Mandare un E-mail in formato HTML</h3>
            <form method="post" action="mandare_una_e-mail_in_formato_HTML.php">
                <input class="invia" type="submit" value="Invia">
            </form>
        </span>
      </div>
</body>
