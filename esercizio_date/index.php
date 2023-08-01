<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazioni</title>
    <style>
        ul{
            margin: 0px;
        }
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
        .contData{
            display: grid;
            grid-template-columns: repeat(2,2fr);
            align-items: start;
        }
        .data{
            padding: 20px;
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
    <span><h3>Unix timestamp</h3>
    <form method="post" action="UNIX_timestamp.php">
        <input class="invia" type="submit" value="Vai a..">
    </form></span>

    <span><h3>date() converte timestamp in formato leggibile</h3>
    <form method="post" action="date().php">
        <input class="invia" type="submit" value="Converti">
    </form></span>

    <span><h3>Parametri di date()</h3>
    <form method="post" action="date().php">
        <input class="const" type="submit"  value="Vedi Parametri">
    </form></span>

    <span><h3>Spiegazione parametri</h3>
    <form method="post" action="spiegazione_parametri.php">
        <input class="const" type="submit"   value="Mostra spiegazione">
        <div class="contData"><span class="data"><ul>
            <li>d - numero del giorno</li>
            <li>D - nome del giorno abbreviato</li>
            <li>l - nome completo</li>
            <li>m - numero del mese</li>
            <li>M - nome del mese</li>
            <li>y - anno con 2 cifre finali</li>
            <li>Y - anno con 4 cifre finali</li>
            <li>per separarli possiamo usare:  - . /</li>
        </ul></span>
        <span class="data"><ul>
            <li>h - ore in formato 12</li>
            <li>H - ore in formato 24</li>
            <li>i - minuti</li>
            <li>s - secondi</li>
            <li>a - am e pm in minuscolo</li>
            <li>A - AM e PM in maiuscolo</li>
        </ul></span></div>
    </form></span>
    
    <span><h3>time() per ottenere il timestamp corrente</h3>
    <form method="post" action="Time().php">
        <input class="const" type="submit"   value="mostra data">
    </form></span>

    <span><h3>mktime() (ore, minuti, secondi, mese, giorno, anno) per ottenere il timestamp di una data</h3>
    <form method="post" action="mktime().php">
        <input class="const" type="submit"   value="mostra data">
    </form></span>

    <span><h3>strtime() da una data leggibile a timestamp (gg-mm-yyyy)</h3>
    <form method="post" action="strtime().php">
        <input class="const" type="submit"   value="Mostra data">
    </form></span>
    
    <span><h3>matematica con le date</h3>
    <form method="post" action="matematica_con_le_date.php">
        <input class="const" type="submit"   value="Mostra data">
    </form></span>
</div>