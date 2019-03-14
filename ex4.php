<?php 

print "Digite o preço da mercadoria:\n";
$preço = (int) fgets (STDIN);

print "Digite o valor do desconto:\n";
$desconto = (int) fgets (STDIN);

$novo_preço = $preço - ($preço*$desconto/100);
$desconto   = $preço - $novo_preço;

print "O preço a pagar será de: $novo_preço reais\n";
print "O desconto foi de: $desconto reais\n";








