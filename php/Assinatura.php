<?php
session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Verificação do formulário de assinatura
if (isset($_POST['submit'])) {
    // Lógica para processar a assinatura
    // Você pode inserir os detalhes da assinatura no banco de dados ou executar ações específicas aqui
    // Redirecione o usuário para a página desejada após a assinatura ser processada
    header('Location: Inicio.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Seu cabeçalho HTML aqui -->
</head>

<body>
    <div class="box">
        <form method="post" action="Assinatura.php">
            <!-- Seu formulário de assinatura aqui -->
            <!-- Certifique-se de que apenas usuários logados possam acessar esta página -->
            <input type="submit" name="submit" value="Assinar">
        </form>
    </div>
</body>

</html>