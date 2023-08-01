
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazioni</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            padding: 40px;
            width: 200px;

        }
        input{
            margin: 10px 0;
        }
        .cont{
            display: grid;
            grid-template-columns: repeat(2,2fr);
            grid-template-rows: repeat(2,2fr);
        }
        h3{
            border: 1px solid rgb(255, 255, 255);
            padding: 5px;
            box-shadow:1px 2px 1px 2px #00000150;
            width: 200px;
            display: grid;
            background-color: burlywood;
            margin-left:30px;
        }
        h4{
            width: max-content;
            margin-left: 30px;
            font-style: italic;
        }
        p{
            margin-left:30px;
            font-style: italic;
        }
        .const{
            border: 1px solid rgb(255, 255, 255);
            padding: 5px;
            box-shadow:1px 2px 1px 2px #00000150;
            width: 200px;
            display: grid;
            background-color: rgb(152, 135, 222);
            border-radius: 50px;
            cursor: pointer;
        }
        span{
            background-color: beige;
            border-radius: 50px;
            margin: 5px;
            box-shadow: 2px 2px 2px 2px #00000150;
        }
        .invia{
            border: 1px solid rgb(255, 255, 255);
            padding: 5px;
            box-shadow:1px 2px 1px 2px #00000150;
            width: 200px;
            display: grid;
            background-color: rgb(152, 135, 222);
            border-radius: 50px;
            cursor: pointer;
        }
        label{
            background-color:rgb(72, 255, 0);
            border: 1px solid white;
            width: 65px;
            box-shadow: 2px 2px 2px 2px #00000150 ;
            padding: 3px;
        }
    </style>
</head>
<body>
    <div class="cont">
    <span><h3>cosa sono le funzioni</h3>
    <form method="post" action=".php">
        <p>le funzioni possiamo definirle come blocchi di codici, cioè uno o più istruzioni utilizzabili più volte nel tempo</p>
        <input class="invia" type="submit" value="Vai a..">
    </form></span>

    <span><h3>Come creare una (definire oppure anonima)</h3>
    <p>Una funzione anonima è una funziona senza nome</p>
    <form method="post" action="Come_definire_or_anonima.php">
        <input class="invia" type="submit" value="definisci">
    </form></span>

    <span><h3>Come creare una funzione locale</h3>
    <form method="post" action="scope_funzioni_locali.php">
        <input class="const" type="submit"  value="Invoca una funzione locale">
    </form></span>

    <span><h3>Come creare delle funzioni globali</h3>
    <form method="post" action="scope_funzioni_globali.php">
        <input class="const" type="submit"   value="invocare una funzione globale">
    </form></span>

    <span><h3>Come cambiare il valore di una variabile esterna alla funzione, all'interno della funzione</h3>
    <form method="post" action="cambiare_il_valore_di_una_funzione_globale.php">
        <input class="const" type="submit"   value="cambia il valore">
    </form></span>

    <span><h3>Parametri</h3>
    <form method="post" action="parametri.php">
        <input class="const" type="submit"   value="mostra parametri">
    </form></span>

    <span><h3>Dare un tipo ai parametri</h3>
    <form method="post" action="dare_un_tipo_ai_parametri.php">
        <input class="const" type="submit"   value="Mostra codice">
    </form></span>

    <span><h3>Parametri di default</h3>
    <form method="post" action="parametri_di_default.php">
        <p>vedi se il tuo numero è pari o dispari</p>
        <input type="number" name="number" id="number">
        <input class="const" type="submit"   value="Mostra codice">
    </form></span>

    <span><h3>Return</h3>
    <form method="post" action="return.php">
        <input class="const" type="submit"   value="Mostra codice">
    </form></span>

    <span><h3>Return type</h3>
    <form method="post" action="return_type.php">
        <input class="const" type="submit"   value="Mostra codice">
    </form></span>

</div>