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
            <h3>Accedere agli elementi iniettati di JSON</h3>
            <form action="esempio.php" method="POST">
                <select name="selezione" id="">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <input type="text" name="data" id="">
            <input class="const" type="submit" value="Vai a..">
            </form>
        </span>
     <script>
        let formData = new FormData();
        formData.append('data','pokedex');
        fetch('esempio.php',{
        method : 'POST',
        body : formData
    })
    .then(response => response.json())
    .then(data =>console.log(data));
     </script>
      </div>
</body>