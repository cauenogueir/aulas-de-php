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
        <form>
            <label class="toc" >Nome</label> <br>
            <Input type="text" class="tx" placeholder="coloque seu nome" /> <br>
                    
            <label class="toc" >Email</label> <br>
            <Input type="email" class="tx" placeholder="Coloque seu email" /> <br>
                    
            <label class="toc" >Assunto</label> <br>
            <Input type="text" class="tx" placeholder="coloque um assunto" /> <br>
                    
            <label class="toc" >Mensagem</label> <br>
            <textarea name="" id="" cols="18" rows="1"></textarea> <br> <br>
                    
 <div class="cont">
            <label  >Genero</label> <br>
                <div class="mam">   <input  type="radio" name="rGenero" /> Masculino </div> 
                <div class="homam">   <input  type="radio" name="rGenero" /> Feminino  </div> <br>
</div>         


            <input type="submit" class="botam" value="enviar"/> <br> 



        </form>
    </section>

<?php include("estrutura/rodape.php");  ?>

