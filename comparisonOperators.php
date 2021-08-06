<?php

var_dump(value: 1 ==1);
//var_dump(value 1 == 2);

$password = 'secret';
var_dump(value: $password == 'secret123');

//Diferença !=

var_dump(value: 1 != 2);
$password = 'lalala';
var_dump(value: $password !=  'secret123');

//Identico ===
var_dump(value: '1' === 1);
var_dump(value: 1 === 1);

// Não identico !==
var_dump(value: '1' !== 1);
var_dump(value: 1 !== 1);

// Maior >

$number = 6;
var_dump(value: $number > 5);

//Maior ou igual >=

$number = 2;
var_dump(value: $number >= 5);

//Menor <


$number = 2;
var_dump(value: $number < 5);

//Menor ou igual <= 

$number = 2;
var_dump(value: $number <= 5);