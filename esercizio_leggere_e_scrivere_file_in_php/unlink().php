<!DOCTYPE html>
<p>
    $nomeFile = 'note5.txt';
    $renameFile = $_POST['text'];
    
    if(file_exists($nomeFile)){
        unlink($nomeFile);
    }else{echo 'file not exists';}
</p>
