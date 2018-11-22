<?php

require 'funcionario.php';



$func = new Funcionario();
$func->nome = "Firmino";
$func->departamento = "Zelador";
$func->data_Entrada->getData();
$func->salario = 1000;


$func2 = new Funcionario();
$func2->nome = "Papaco";
$func2->departamento = "segurança";
$func2->data_Entrada->getData();
$func2->salario = 1000;

$dt = new Data();
$dt->dia = 07;
$dt->mes = 02;
$dt->ano = 2002;


echo ($func);
echo($func2);

