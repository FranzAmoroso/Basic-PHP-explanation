<?php

$persona = [
    'A' => 'b',
    'B' => 'a',
    'C' => 'c',
];
ksort($persona);
print_r($persona);