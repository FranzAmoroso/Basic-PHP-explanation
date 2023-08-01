<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $estenzioni_permesse = array("jpg" => "image\jpg", "jpeg" => "image\gif", "png" => "image\png");
        
        $nome_file =$_FILES["photo"]["name"];
        $tipo_file = $_FILES["photo"]["type"];
        $dimensione_file = $_FILES["photo"]["size"];


//verifichiamo estenzione file
$estenzione = pathinfo($nome_file, PATHINFO_EXTENSION);
if(!array_key_exists($estenzione,$estenzioni_permesse)) die('Errore: Seleziona un formato valido');

// Verifichiamo la grandezza massimo 5mb
$dimenzione_massima = 5 * 1024 * 1024;
if($dimensione_file > $dimenzione_massima) die("Errore: la grandezza massima è superiore al limite di 5mb");

// Verifichiamo il tipo MIME
if(!in_array($tipo_file,$estenzioni_permesse)){
    //Controllare se il file esiste già
    if(file_exists("upload/" . $nome_file)){
        echo $nome_file . " esiste già.";
    }else{ 
        move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/" . $nome_file);
        echo "il tuo file è stato caricato con successo";
    } 
}else {
    echo "Errore: C'è stato un problema con il caricamento del tuo file, riprova.";
}
        
    }else {
        echo "Errore" . $_FILES["photo"]["error"];
    }
}

?>