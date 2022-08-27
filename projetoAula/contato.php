<?php include("estrutura/cabecalho.php");  ?>


<style> 
    body{
        background-color: skyblue;
}
 </style>



    <section>
        <h1 class="cont">contato</h1>
    </section>


    <section>
        <form action="dados-contato.php" method="post">

            <label class="toc" >Nome</label> <br>
            <Input type="text" class="tx" name="txNome" placeholder="coloque seu nome" /> <br>
                    
            <label class="toc" >Email</label> <br>
            <Input type="email" class="tx" name="txEmail" placeholder="Coloque seu email" /> <br>
                    
            <label class="toc" >Assunto</label> <br>
            <Input type="text" class="tx" name="txEndereco" placeholder="coloque um assunto" /> <br>
                    
            <label class="toc" >Mensagem</label> <br>
            <textarea name="" id="" cols="18" rows="1"></textarea> <br> <br>

    <section>       
                    
 <div class="cont">
 <form action="dados-contato.php" method="post">

            <label  >Genero</label> <br>
                <div class="man">   <input  type="radio" name="rGenero" value = "Masculino" /> Masculino </div> 
                <div class="woman">   <input  type="radio" name="rGenero" value = "Feminino"/> Feminino  </div> <br>
</div>         


            <input type="submit" class="botam" value="enviar"/> <br> 



        </form>
    </section>

<?php include("estrutura/rodape.php");  ?>

