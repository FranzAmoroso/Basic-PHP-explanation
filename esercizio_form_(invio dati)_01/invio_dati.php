<?php 
/* echo 'ciao ' .$_POST['nome']. ' ' .$_POST['cognome']; */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .para{
            color: blue;
            font-style: italic;
        }
    </style>
</head>
<body>
    <p class="para">ciao<?php echo ' '. ucfirst( $_POST['nome']). ' ' .ucfirst($_POST['cognome']) ?></p>
</body>
</html>