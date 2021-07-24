<?php 

function pot($x, $y) {
    // Verificar se expoente é zero
    if ($y == 0){
        return 1;
    }
   // Verificar se expoente é negetivo
    if ($y <0){
        $x = 1 / $x;
        $y = $y * -1;
    }
    $mult = $x;
    for ($i =1; $i<$y; $i++){
        $mult = $mult * $x;
    }
    return $mult;

}

$nun = $_POST ['num'];
$pot = $_POST ['pot'];

$resultado = pot($nun, $pot);

echo $resultado

?>