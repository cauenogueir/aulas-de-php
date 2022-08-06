<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"> 
    
</head>
<body>

<header>
        <nav>
            <ul>
                <li> <a href="projeto.php"> Home </a> </li>
                <li> <a href="decisao.php" > Decisão </a> </li>
            </ul>
        </nav>
    </header>   
    

<?php

$nota1 = 0;
$nota2 = 10;
$nota3 = 0;
$nota4 = 5;
$media = $nota1 + $nota2 + $nota3 + $nota4 / 4;

if($media >= 7 ){

 echo "<h1 class= 'passou'>  $media aprovado </h1>";

}

else{

    echo "<h1 class= 'NaoPassou'> reprovado </h1>";

}

echo $media





?>
    
</body>
</html>
