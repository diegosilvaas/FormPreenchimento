<!DOCTYPE html>
<html lang="PT-BR">


<?php include 'includes/head.php'; ?>

<body>



    <div class="container text-center">
    <br><div class="alert alert-primary" role="alert">
    <strong>Experimente grátis por 7 dias e depois R$ 20/mês</strong>
        </div>

        <form action="action.php" method="post" id="form">
       

            <font color='white'>
                
                <p1>
                    <h1> Aprenda a codificar com a Mentoria </h1>

                    <p> Veja como desenvolvedores experientes solucionam problemas
                        em tempo real.<br>
                        Assistir a tutoriais com scripts é ótimo. mas
                        entender como os desenvolvedores pensam é inestimável.</p>
            </font>



            <p><input type="text" name="name" placeholder="  Nome Completo "></p>
            <p><input type="number" name="birthiday" placeholder="  Data de nascimento "></p>
            <p><input type="text" name="email" placeholder="  Endereço de email "></p>
            <p><input type="number" name="telephone" placeholder="  Telefone "></p>
            <p><input type="text" name="state" placeholder="  Estado que reside "></p>
            <p><input type="password" name="senha" placeholder="  Senha "></p>
            <button type="submit" name="btncadastrar" class="btn btn-primary">
                Solicitar teste gratuito</button>



            <?php
            if (isset($_POST['btncadastrar'])) {
                $name = $_POST['nome'];
                $email = $_POST['email'];
                $telephone = $_POST['telefone'];
                $password = $_POST['senha'];



                $db = new PDO("mysql:dbname=formpreenchimento;host=localhost", 'root', '');
                $sql = "insert into formulario (nome, email, telefone, senha) values ('$name', 
        '$email', $telephone, $password)";
                $stmt = $db->prepare($sql);

                if ($stmt->execute()) {
                    echo 'Formulario enviado com sucesso';
                } else {
                    echo 'Erro ao cadastrar Formulário';
                }
            }


            ?>





            <script>

            </script>

</body>

</html>