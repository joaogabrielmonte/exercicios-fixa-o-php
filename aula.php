<?php

$data = new DateTime();
echo $data->format('d/m/Y H:i:s');

echo PHP_EOL;

$data = new DateTime();

$interval = new DateInterval('P5Y10M5DT10H50M10S');
$data->sub($interval);

var_dump($data);