<?php
$numero = $_POST['number'];

if($numero > 0 ){
    if($numero % 2 == 0 ){
        echo $numero. ' è pari';
    }else {echo $numero. ' non è pari';}
}else {echo 'inserire numero più grande';}
