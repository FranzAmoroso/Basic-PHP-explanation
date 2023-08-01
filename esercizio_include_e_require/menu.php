<?php include 'include.php'?>
<?php require 'require.php'?>
<p class="data">
    <?php
       $data = date('re s:i:H', time());
       echo 'Oggi è il giorno'. " ". $data;
    ?>
    </p>

    <div class="cont">
       
    <span><h3>Include</h3>
    <form method="post" action="include.php">
        <p><?php echo $saluta  ?></p>
        <input class="invia" type="submit" value="Vai a..">
    </form></span>

    <span><h3>Require</h3>
    <form method="post" action="require.php">
        <p><?php saluta() ?></p>
        <input class="invia" type="submit" value="Vai a..">
    </form></span>

    <span><h3>includere file HTML con include</h3>
    <form method="post" action="menu.php">
        
        <input class="invia" type="submit" value="Vai a..">
    </form></span>

    <span><h3>Evitare i duplicati</h3>
    <form method="post" action="Evitare_duplicati.php">
        <?php require 'Evitare_duplicati.php' ?>
        <input class="const" type="submit"  value="Vai a..">
    </form></span>

    <span><h3>Warning error</h3>
    <form method="post" action="warning_error.php">
        <?php require 'warning_error.php'?>
        <input class="const" type="submit"   value="Mostra spiegazione">
    </form></span>

    <span><h3>Fatal error</h3>
    <form method="post" action="fatal_error.php">
        <?php require 'fatal_error.php' ?>
        <input class="const" type="submit"   value="Mostra spiegazione">
    </form></span>