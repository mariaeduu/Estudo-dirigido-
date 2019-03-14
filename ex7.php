<?php

print "Quantos kilometros foram percorridos com o carro?\n";
$kilometros = (int) fgets (STDIN);

print "Quantos dias o carro foi alugado?\n";
$dias = (int) fgets (STDIN);

$preço_1 = $kilometros*0.15;
$preço_2 = $dias*60;

$valor_total = $preço_1 + $preço_2;

print "Você vai pagar: $valor_total reais";

