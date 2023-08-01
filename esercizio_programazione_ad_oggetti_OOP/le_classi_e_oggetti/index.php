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
            <h3>Getters e Setters</h3>
            <form method="post" action="getters_e_setters.php">
                <input class="invia" type="submit" value="Vai a..">
            </form>
        </span>
        <span>
            <h3>Proprietà e Metodi</h3>
            <form method="post" action="proprietà_e_metodi.php">
                <input class="invia" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>Costruttore</h3>
            <form method="post" action="costruttore.php">
                <input class="invia" type="submit" value="Vai a..">
            </form>
        </span>

        <span>
            <h3>Modificatori di accesso</h3>
            <form method="post" action="modificatori_di_accesso.php">
                <p>
                    public: si può accedere a proprietà e metodi da ovunque(default)
                    protected: si può accedere a proprietà e metodi solo dalla classe e classi figlie
                    private: si può accedere a proprietà e metodi solo dalla classe
                </p>
                <input class="const" type="submit" value="Vai a..">
            </form>
        </span>
    </div>
</body>

</html>