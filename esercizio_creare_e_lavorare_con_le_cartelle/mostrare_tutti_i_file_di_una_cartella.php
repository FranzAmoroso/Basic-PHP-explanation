<?php

use LDAP\Result;

    function mostraFile($path){
        if(file_exists($path)&& is_dir($path)){
            $result = scandir($path);
            
            $files = array_diff($result, array ('.', '..'));
            //print_r($result);
            //print_r($files);

            if(count($files) > 0 ){
                foreach($files as $file){
                    if(is_file("$path/$file")){
                        echo $file. "<br>";
                    }else if(is_dir("$path/$file")){
                        mostraFile("$path/$file");
                    }
                }
            }else{
                echo 'non sono stati trovati file in questa cartella';
            }
        }else{
            echo 'ERRORE la cartella non esiste';
        }
    }
    mostraFile('extra');
?>