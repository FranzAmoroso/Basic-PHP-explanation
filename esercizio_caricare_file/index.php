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
            <h3>Caricare un file</h3>
            <form method="POST" action="caricare_un_file.php" enctype="multipart/form-data">
                <h2>Caricare File</h2>
                <label for="fileSelect">File:</label>
                <input type="file" name="photo" id="fileSelect">
                <input class="invia" type="submit" value="Carica">
                <p><b>Nota:</b>Sono permessi solo i formati .jpg .jepg .gif, .png con una size massima di 5mb</p> 
            </form>
        </span>
      </div>
</body>

</html>