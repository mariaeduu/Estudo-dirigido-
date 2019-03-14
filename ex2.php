<?php 

print "Digite quantos anos:";
$anos = (int) fgets (STDIN);

print "Digite quantas horas:";
$horas = (int) fgets (STDIN);

print "Digite quantos minutos:";
$minutos = (int) fgets (STDIN);

print "Digite quantos segundos:";
$segundos = (int) fgets (STDIN);

$total_anos      = $anos*31.536000;
$total_horas     = $horas*3.600;
$total_minutos   = $minutos*60;

$total_segundos = $total_anos + $total_horas + $total_minutos;

print "O total de segundos foi: $total_segundos";































