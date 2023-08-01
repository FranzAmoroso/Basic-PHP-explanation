
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
    <span><h3>loop for</h3>
    <p>for($i=0; $i < 5; $i++);<br>echo $i;</p>
    <form method="post" action="loop_for.php">
        <input class="invia" type="submit" value="esegui ciclo for">
    </form></span>

    <span><h3>loop foreach</h3>
    <p>si usa solitamente per gli Array associativi</p>
    <form method="post" action="loop_foreach.php">
        <input class="invia" type="submit" value="esegui ciclo foreach">
    </form></span>

    <span><h3>while</h3>
    <p>$i=0;<br>whlie($<'5){<br>echo $i<br>$i++;}</p>
    <form method="post" action="while.php">
        <input class="const" type="submit"  value="Esegui ciclo While">
    </form></span>

    <span><h3>do while</h3>
    <p>$i=0<br>do{<br>echo $i;<br>$i++;<br>}while($i<=10)</p>
    <form method="post" action="do_while.php">
        <input class="const" type="submit"   value="Esegui ciclo do while">
    </form></span>

    <span><h3>Break</h3>
    <h4>Quando il valore è eseguito manda a schermo fermandosi</h4>
    <p>for($i=0;$<'5;$i++){<br>echo $i;<br>if($i==3){<br>break;}<br>}</p>
    <form method="post" action="Break.php">
        <input class="const" type="submit"   value="Vedi funzionamento break">
    </form></span>

    <span><h3>Continue</h3>
    <form method="post" action="continue.php">
        <h4>Ignora la condizione dove risiede e va avanti</h4>
        <p>for($i=0;$i<'5;$i++'){<br>if($i==3){<br>continue;<br>}echo $i;<br>}</p>
        <input class="const" type="submit"   value="Vedi funzionamento continue">
    </form></span>

    <span><h3>Loop in HTML</h3>
    <form method="post" action="loop_in_HTML.php">
        <input class="const" type="submit"   value="Mostra codice">
    </form></span>

</div>