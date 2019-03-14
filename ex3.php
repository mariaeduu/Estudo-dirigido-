<?php 

print "Digite seu salario atual:\n";
$salario = (int) fgets (STDIN);

print "Digite a porcentagem de aumento:\n";
$porcentagem = (int) fgets (STDIN);

$novo_salario = $salario + ($salario * $porcentagem/100);

$aumento = $novo_salario - $salario;

print "Seu novo salario é: $novo_salario reais\n";
print "Foi um aumento de: $aumento reais\n"; 




