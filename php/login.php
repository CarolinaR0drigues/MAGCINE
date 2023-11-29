<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção de Dados</title>
</head>
<body>

<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        require_once('conexao.php');
        
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "SELECT id_usu, senha_usu, nome_usu FROM Usuario WHERE email_usu = '$email' AND senha_usu = '$senha';";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['usuario'] = array('name' => $row['nome_cli'], 'cpf' => $row['cpf_cli'], 'contato' => $row['contato_cli'], 'nascimento' => $row['dataNascimento_cli'], 'email' => $row['email_cli']);
            header("Location: ../Inicio.html");
            exit();
        } else {
            header("Location: ../Login.html");
            exit();
        }
    
        //$conn->close();
    }
    else{
        echo "Erro Dados";
    }
    ?>
</body>
</html>
    
</body>
</html>