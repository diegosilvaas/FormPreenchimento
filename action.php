<?php include 'includes/head.php'; ?>
<h1>
    <div class="alert alert-danger" role="alert">
        <p class="text-center"> <br>
            Oi <?php echo htmlspecialchars($_POST['name']); ?>. <br><br><br>
            Você ganhou o teste gratuito de 7 dias! Confirme seu email
            <?php echo htmlspecialchars($_POST['email']); ?>.<br>
    </div><strong></p>