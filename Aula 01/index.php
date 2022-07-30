<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1> Ola mundo </h1>

        <?php

            $nome = "Caue";
            $idade = 17 ;
            $peso = 55.46;
           

            echo "Ola mundo";
            echo "<h1> teste </h1>";
            echo $nome; 
            echo "<br />";
            echo $idade;
            echo "<br />";
            echo $peso ;
            echo "<br />";

            // o simbolo de . é para concatenaçao

            echo "texto $nome <br />"; 
        
            // operadores aritmeticos * - + / %
            // calculadora 
            
            $n1 = 8;
            $n2 = 2;
            $soma = $n1 + $n2;
            $subtraçao = $n1 - $n2;
            $multiplicacao = $n1 * $n2;
            $divisao = $n1 / $n2;
            $porcentagem = $n1 % $n2;

            // saida

            echo " <br /> $n1 + $n2  = $soma"; 
                    
            echo " <br /> $n1  - $n2  = $subtraçao"; 
                     
            echo " <br /> $n1  * $n2  = $multiplicacao";
                   
            echo " <br /> $n1  / $n2  = $divisao"; 
                   
            echo " <br /> $n1  % $n2 = $porcentagem";
                    

        ?>


</body>
</html>