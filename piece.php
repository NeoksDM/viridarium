<?php 
echo 'chucha madre'.'<br/>';

for ($i=0; $i <10; $i++) { 
    $vector[$i]=rand(1,9);
    echo $vector[$i].'<br/>';
}
echo var_dump($vector);
$longitud = 9;
/*
function Sucesion_base($indice) {
    global $longitud;
    for($i=0; $i<$longitud; $i++) {
        $sucesión[$i] = $i+1;
    }
    return $sucesión[$indice];
}




function Desfase($indice) {
global $longitud;
$desfase = floor($indice/$longitud);
return $desfase;

function Adicíon($a, $b) {
    global $longitud;   
    $adición_inicial = Sucesion_base($a) + 
Sucesion_base($longitud, $b);
    if($adición_inicial<$longitud) {
        $adicion_final = $adición_inicial;
    } else {
        $adicion_final = $adición_inicial - Desfase()
    }
}

function Producto
*/
?>

