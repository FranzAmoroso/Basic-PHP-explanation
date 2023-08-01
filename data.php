<?php
$data1 = date('d M Y', time());
$data2 = date('H:i,', time());


date_default_timezone_set('UTC');
$data3 = date('N');
switch ($data3) {
    case 1:
        $data3 = 'Lunedi';
        break;
    case 2:
        $data3 = 'Martedi';
        break;
    case 3:
        $data3 = 'Mercoledi';
        break;
    case 4:
        $data3 = 'Giovedi';
        break;
    case 5:
        $data3 = 'Venerdi';
        break;
    case 6:
        $data3 = 'Sabato';
        break;
    case 7:
        $data3 = 'Domenica';
        break;
    default:
        # code...
        break;
}
echo 'oggi è il giorno' . ' ' . $data1 . ' ' . 'delle ore' . ' ' . $data2. ' '. $data3;

