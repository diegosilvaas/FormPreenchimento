<?php include 'includes/head.php'; ?>

    <div class="alert alert-danger" role="alert">
       <h1> <p class="text-center"> <br>
         PARABÉNS <br> <?php echo htmlspecialchars($_POST['name']); ?>. <br><br> </h1>

            <p class="text-center"> Você ganhou o teste gratuito de 7 dias! Confirme seu email:  
            <b> <?php echo htmlspecialchars($_POST['email']); ?>.<br></b></p>
    </div><strong></p>



    <form id="voltar">

    
    <button type="button" onClick="JavaScript: window.history.back();"
     class="btn btn-primary btn-lg btn-block">Voltar</button>
   

    
</form>