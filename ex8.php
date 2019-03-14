<?php 

print "Quantos cigarros você fuma por dia?\n";
$cigarros_fumados = (int) fgets (STDIN);

print "A quantos anos você fuma?\n";
$anos_fumados = (int) fgets (STDIN);

$total_cigarros = ($anos_fumados*365)*$cigarros_fumados;
$dias_perdidos = ($total_cigarros*10)/24;


print "Você já perdeu $dias_perdidos dias de vida\n";






