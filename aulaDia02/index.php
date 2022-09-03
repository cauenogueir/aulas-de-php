<?php

$i = 0; 

while($i<= 10){

    echo "exemplo laço while: $i <br />";
    $i++;

}

//-------------------------------------------------------------------------------------

echo "<br />";
    for($j = 0; $j<=10; $j++){

        echo "exemplo laço for com incremento: $j <br />";

    }
    echo    "<br />";
//-------------------------------------------------------------------------------------

    for($j=10;$j>=0; $j--){

        echo "exemplo laço for com decremento: $j <br />";

    }
    echo    "<br />";
//--------------------------------------------------------------------------------------    

$k=0;
do{

    echo "exemplo com laço do while $k <br />";
    $k++;
}while($k <= 10);
//--------------------------------------------------------------------------------------

echo "<br />";
$nome = array();
$nome [0] = "Ana";
$nome [1] = "Bruno";
$nome [2] = "Zelia";
$nome [3] = "Daniel";
$nome [4] = "Carlos"; 

for($i=0;$i<count($nome);$i++){

    echo "$nome[$i] <br />";
    
}

// exercicios ----------------------------------------  


$t = "pares";

for($i=0; $i<=100;  $i++){

   if($i % 2 ==0){

    echo "$t $i <br />";
   }
}

echo "<br />";
$nota = array();
$nota [0] = 8;
$nota [1] = 2;
$nota [2] = 9;
$nota [3] = 1;
$media = 0;
    
for($i=0; $i<count($nota); $i++){
    $media = $media + $nota[$i];
    }
    
    $media = $media / $i;

    echo "Média:   $media;  </br> ";


?>

<?php

$nota = array();
$nota [0] = 8;
$nota [1] = 2;
$nota [2] = 9;
$nota [3] = 1;
$media = 0;
$i = 0;

while($i<count($nota)){
    $media = $media + $nota[$i];
    $i++;
}
$media = $media / $i;
echo "Média usando while: " . $media . "</br> ";
?>

<?php
$nota = array();
$nota [0] = 8;
$nota [1] = 2;
$nota [2] = 9;
$nota [3] = 1;
$media = 0;
$i = 0;

do {
    $media = $media + $nota[$i];
    $i++;
} while ($i <count($nota));

$media = $media / $i;
echo "Média usando do while: " . $media ;

?>

<?php



?>
