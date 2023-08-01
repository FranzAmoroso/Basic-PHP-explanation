<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $numero = 18;?>
    <?php if ($numero == 0):?>
        <p>condizione 1 verificata</p>
        <?php elseif ($numero >= 18):?>
        <p>condizione 2 verificata</p>
        <?php else:?>
            <p>condizione 3</p>
            <?php endif;?>
</body>
</html>