<?php
session_start();

// Verifique se o usuário já está logado
if (isset($_SESSION['user_id'])) {
    header('Location: Inicio.html');
    exit;
}

// Verifique se o formulário de registro foi enviado
if (isset($_POST['register'])) {
    // Conecte-se ao banco de dados (substitua com suas próprias credenciais)
    $db = new mysqli("127.0.0.1", "root", "root", "bd_magcine");

    if ($db->connect_error) {
        die("Erro na conexão com o banco de dados: " . $db->connect_error);
    }

    // Valide e insira os dados no banco de dados (exemplo para a tabela "Usuario")
    $nome = $db->real_escape_string($_POST['nome']);
    $cpf = $db->real_escape_string($_POST['cpf']);
    $sexo = $db->real_escape_string($_POST['sexo']);
    $data_nascimento = $db->real_escape_string($_POST['data_nascimento']);
    $celular = $db->real_escape_string($_POST['celular']);
    $email = $db->real_escape_string($_POST['email']);
    $endereco = $db->real_escape_string($_POST['endereco']);
    $senha = $db->real_escape_string($_POST['senha']);

    // Execute a inserção no banco de dados
    $query = "INSERT INTO Usuario (nome_usu, cpf_usu, sexo_usu, data_nascimento, celular_usu, email_usu, endereco_usu, senha_usu) VALUES ('$nome', '$cpf', '$sexo', '$data_nascimento', '$celular', '$email', '$endereco', '$senha');";

    if ($db->query($query) === true) {
        // Registro bem-sucedido, redirecione para a página de assinatura
        echo "Erro ao registrar: ";
        header('Location: Assinatura.php');
        exit;
    } else {
        // Trate erros de inserção
        echo "Erro ao registrar: " . $db->error;
    }

    $db->close();
}
?>
<!-- Seu formulário de cadastro de usuário HTML aqui -->