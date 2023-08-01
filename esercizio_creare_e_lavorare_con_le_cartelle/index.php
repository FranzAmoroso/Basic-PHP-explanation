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
            <h3>Creare una nuova cartella con mkdir()</h3>
            <form method="post" action="creare_una_nuova_cartella.php">
                <input class="invia" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>Copiare un file da un posto all'altro con copy</h3>
            <form method="post" action="copiare_file_da_un_posto.php">
                <input class="invia" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>mostrare tutti i file con scandir()</h3>
            <form method="post" action="mostrare_tutti_i_file_di_una_cartella.php">
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>Mostrare tutti i file con glob()</h3>
            <form method="post" action="mostrare_tutti_i_file_di_un_certo_topo_glob.php">
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>
      </div>
</body>

</html>