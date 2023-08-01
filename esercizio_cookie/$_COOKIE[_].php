<?php 

if(isset($_COOKIE["user"])){
echo $_COOKIE["user"];
}else{
    echo "Nessun COOKIE disponibile";
}
?>