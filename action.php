<?php include 'includes/head.php'; ?>

<br><br><div class="alert alert-danger" role="alert">
   <h1>
      <p class="text-center"> <br>
         PARABÉNS <br> <?php echo htmlspecialchars($_POST['name']); ?>. <br><br>
   </h1>

   <p class="text-center"> Você ganhou o teste gratuito de 7 dias! Confirme seu email:
      <b> <?php echo htmlspecialchars($_POST['email']); ?>.<br></b>
   </p>
</div><strong></p>


   <div class="container">
      <div class="text-center">
         <form id="voltar">



            <button type="button" onClick="JavaScript: window.history.back();" class="btn btn-primary btn-lg btn-block">Voltar</button>

      </div>

      </form>

      <?php
      if (isset($_POST['btncadastrar'])) {
         $name = $_POST['name'];
         $birthiday = $_POST['birthiday'];
         $email = $_POST['email'];
         $telephone = $_POST['telephone'];
         $state = $_POST['state'];
         $password = $_POST['senha'];



         $db = new PDO("mysql:dbname=formpreenchimento;host=localhost", 'root', '');
         $sql = "insert into formulario (nome, data de nascimento, email, telefone, estado que reside, senha) 
         values ('$name', '$birthiday', '$email', $telephone, '$state', $password)";
         $stmt = $db->prepare($sql);

       
          if ($stmt->execute()) {
             'Formulario enviado com sucesso';
         } else {
             'Erro ao cadastrar Formulário';
         }  
      }


      ?>