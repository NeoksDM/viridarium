<?php 
echo 'coño de la puta madre'.'<br/>';

for ($i=1; $i <=75 ; $i++) { 
    for($j=1; $j <=75 ; $j++){

        $n=rand(0,2);
        $plano[$i][$j] = $n;
        echo $plano[$i][$j].'    ';
    }
    echo '<br/>';
}
 $x=35;
 $y=35;
 $pos_jugador = array($x,$y);
$n=rand(0,1);

?>

