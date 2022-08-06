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
                <li> <a href="decisao.php"> Decisão </a> </li>
            </ul>
        </nav>
    </header>    
    

<?php

$nome = "Juarez";
$idade = 28;
$email = "juarez@gmail.com";

$status = "";

        // operadores relacionais > < >= <= == !=
        // > maior 
        // < menor
        // >= maior ou igual
        // <= menor ou igual
        // == igual
        // != diferente

if($idade >= 18 ){

    //se a condiçao for verdadeiras
    $status = "maior de idade";


}

else{

    //se a condiçao for falsa
    $status  = "menor de idade";
}


echo  "<h1> nome: <span class='nome' >  $nome </span> </h1>";
echo "<h2> idade: <span class='idade' > $idade </span> </h2>";
echo "<h3> email: <span class='email' > $email </span> </h3>";

echo "<h4> $status </h4>"

?>
    
</body>
</html>