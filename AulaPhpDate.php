<?php

$data = new DateTime();

$intervalo = new DateInterval('P5Y10M5DT10H50M10S');
//$data->add($intervalo);
$data->sub($intervalo);  
var_dump($data);

//print_r ($data);
//print_r ($data->format('d-m-Y H:i:s')) . PHP_EOL;

//