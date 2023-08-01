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
            <h3>regex o RegEx(regular expretion)</h3>
            <form method="post" action="">
                <input class="invia" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>sintassi</h3>
            <form method="post" action="sintassi.php">
                <ul>
                    <li>.</li>
                    <li>?</li>
                    <li>*</li>
                    <li>{ }</li>
                    <li>[ ]</li>
                    <li>( )</li>
                    <li>^</li>
                    <li>$</li>
                    <li>\</li>
                    <li>|</li>
                </ul>
                <input class="invia" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>Quantificatori</h3>
            <form method="post" action="quantificatori.php">
                <?php require "quantificatori.php" ?>
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>ancore</h3>
            <form method="post" action="ancore.php">
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>preg_grep</h3>
            <form method="post" action="preg_grep.php">
                <?php require "preg_grep.php" ?>
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>classi di carattere</h3>
            <form method="post" action="classi_di_caratteri.php">
           <?php require 'classi_di_caratteri.php' ?>
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>preg_match</h3>
            <form method="post" action="preg_match.php">
                <?php require 'preg_match.php' ?>
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>preg_match_all</h3>
            <form method="post" action="preg_match_all.php">
                <?php require 'preg_match_all.php' ?>
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>classi predefinite</h3>
            <form method="post" action="classi_predefinite.php">
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>preg_replace</h3>
            <form method="post" action="preg_replace.php">
                <?php require "preg_replace.php" ?>
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>limiti di una parola</h3>
            <form method="post" action="limiti_di_una_parola.php">
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>


    </div>
</body>

</html>