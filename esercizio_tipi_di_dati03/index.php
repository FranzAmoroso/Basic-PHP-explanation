<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizio Form (invio dati)</title>
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
    </style>
</head>
<body>
    
    <form method="post" action="esempio.php">
        <label for="nome">nome</label>
        <input type="text" id="nome" name="nome" placeholder="inserisci nome">
        <label for="cognome">cognome</label>
        <input type="text" id="cognome" name="cognome" placeholder="inserisci cognome">
        <input type="submit" value="invia">
    </form>
</body>
</html>