<?php
// "/^M/i" questo vuol dire key insensitive, cioè che se ne frega se la lettera inserita è maiuscola o minuscola
$pattern = "/^M/";
$name = array("Luca", "Mario", "Michele", "maria");
$matches = preg_grep($pattern, $name);
foreach($matches as $match){
    echo "Trova tutte le parole che incominciano con la M maiuscola:"."<br>". $match."<br";
}
?>