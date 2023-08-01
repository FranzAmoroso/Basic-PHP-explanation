<!DOCTYPE html>
</head>
<style>
 .p{
    border: 1px solid orange;
    border-radius: 50px;
    padding: 20px;
    margin-left: 30px;
    width:max-content;
    font-family: cursive;
 }
</style>
<body>
    <?php for($i=1;$i<6;$i++): ?>
        <li>list item<?php echo $i. "<br>" ?></li>
        <?php endfor ?>

        <?php $persona= [
            'nome' => 'Franz',
            'cognome' => 'Amoroso',
            'eta' => 23
        ] ?>

        <p class="p"><?php foreach($persona as $chiave => $valore){
            echo $valore."<br>";
        } ?></p>
            
</body>
</html>