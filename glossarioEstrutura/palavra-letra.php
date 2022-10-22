<section>

    <figure>
        <img src="" />
        <figcaption>
            <a href="#"> Palavra A1 </a>
        </figcaption>
    </figure>

    <figure>
        <img src="" />
        <figcaption>
            <a href="#"> Palavra A2 </a>
        </figcaption>
    </figure>

    <figure>
        <img src="" />
        <figcaption>
            <a href="#"> Palavra A3 </a>
        </figcaption>
    </figure>

</section>

<?php
    include("conexao.php");

    $letter = $_GET['letra'];

    echo "<h1> $letter </h1>";

    //$stmt = $pdo->prepare("select * from tbPalavra");	

    $stmt = $pdo->prepare("select * from tbPalavra
     where tituloPalavra like '$letter%'");	
    $stmt ->execute();
    
    while($row = $stmt ->fetch(PDO::FETCH_BOTH)){    
        echo utf8_encode($row[0]);
        echo utf8_encode($row[1]);        
        echo utf8_encode($row[2]);
        echo utf8_encode($row[3]);
        echo utf8_encode($row[4]);
        echo "<br />";        
    }
    	
?>