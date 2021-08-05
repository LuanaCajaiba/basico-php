<?php

$name = 'Luana';

echo $name . PHP_EOL;

$name = 'Cajaiba';

echo $name . PHP_EOL;

$data = [
    'LuanaCajaiba',
    24,
    'Salvador'
];

echo $data[0] ; PHP_EOL;

$data = [
    'name' => 'Luana',
    'age' => 24,
    'city' => 'Salvador',
];

echo $data['name'] . PHP_EOL;

/**Constante */

define('url_google', 'https://google.com');

echo  url_google;