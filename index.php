<?php
function CalculeMoyenne($a, $b, $c)
{
    $moyenne = ($a+$b+$c)/3;
    return round ($moyenne, 2);
}

function afficherResultat ($nom, $moyenne){
if($moyenne>=10){
    echo "La moyenne est suffisante";
}
else{
    echo "La moyenne est insuffisante";
}
}

echo CalculeMoyenne (20,2,6);
echo "<br>";
echo afficherResultat("Alice" ,CalculeMoyenne (1,2,3))
?>