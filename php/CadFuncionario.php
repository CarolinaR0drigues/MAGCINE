<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- GIOVANA OLIVEIRA DEMUNER -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção de Dados</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
        require_once('conexao.php');

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $sexo = $_POST["sexo"];
        $data_nascimento = $_POST["data_nascimento"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $endereco = $_POST["endereco"];

        $sql = "INSERT INTO Funcionarios VALUES (null, '$nome', '$email', '$sexo', '$telefone', '$data_nascimento', '$cidade', '$estado', '$endereco');";

        if ($conn->query($sql) === TRUE) {
            echo "Dados inseridos com sucesso!";
        } else {
            echo "Erro na inserção: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Erro Dados";
    }
    ?>
</body>

</html>