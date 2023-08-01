<!DOCTYPE html>
<link rel="stylesheet" href="../style.css">
<?php
require '../data.php';
session_start();
$_SESSION['user'] = $_POST['name']. ' ' . $_POST['cognome'];
setcookie('user', time()+60*60*24*30);
echo '<br>' . 'Salve' .' ' . $_SESSION['user'];

/* session_destroy(); */
?>
