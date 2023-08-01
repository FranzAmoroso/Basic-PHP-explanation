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
            <h3>Come aprire un file con fopen() e vederne il contenuto</h3>
            <form method="post" action="fopen().php">
                <input class="invia" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>modalita di lettera del contenuto</h3>
            <form method="post" action="modalita_di_lettura_del_contenuto.php">
                <?php  require 'modalita_di_lettura_del_contenuto.php'?>
                <input class="invia" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>check se il file esiste</h3>
            <form method="post" action="check_se_il_file_esiste.php">
                <input type="search" name="search" id="search">

                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>fread($file, 'number') tipo di lettura</h3>
            <form method="post" action="fread().php">
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>filesize() per mostrare tutto il file</h3>
            <form method="post" action="filesize().php">
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>readfile() leggere il file senza aprirlo</h3>
            <form method="post" action="readfile().php">
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>file_get_content() leggere il file senza aprirlo</h3>
            <form method="post" action="file_get_content.php">
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>scrivere nel testo una frase con fwrite()</h3>
            <form method="post" action="fwrite().php">
                <textarea name="text" id="text" cols="30" rows="10"></textarea>
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>{consigliato}scrivere nel testo con file_put_contents() e mostrarla nel web</h3>
            <form method="post" action="file_put_content().php">
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>Rename il nome del file</h3>
            <form method="post" action="rename_il_file.php">
                <textarea name="text" id="" cols="10" rows="10"></textarea>
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>Eliminare un file con </h3>
            <form method="post" action="unlink().php">
                <?php require 'unlink().php' ?>
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>


    </div>
</body>

</html>