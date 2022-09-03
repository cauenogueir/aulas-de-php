<?php

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

    echo "Média: " . $media;

   
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
echo "Média usando while: " . $media ;


?>