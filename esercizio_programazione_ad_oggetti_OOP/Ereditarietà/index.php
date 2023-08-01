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
            <h3>Estendere una classe</h3>
            <form method="post" action="estendere_una_classe.php">
                <input class="invia" type="submit" value="Vai a..">
            </form>
        </span>
        <span>
            <h3>Rivedere i mdificatori di acesso</h3>
            <ul>
                <li>
                    <form method="post" action="Protected.php">
                        <input class="const" type="submit" value="Protected">
                    </form>
                </li>
                <li>
                    <form action="private.php" method="post">
                        <input class="const" type="submit" value="Private">
                    </form>
                </li>
            </ul>
        </span>
    </div>
</body>

</html>