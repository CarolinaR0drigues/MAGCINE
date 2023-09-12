<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- ANA CAROLINA RODRIGUES DO VALE -->
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
        $cpf = $_POST["cpf"];
        $sexo = $_POST["sexo"];
        $data_nascimento = $_POST["data_nascimento"];
        $celular = $_POST["celular"];
        $email = $_POST["email"];
        $endereco = $_POST["endereco"];
        $senha = $_POST["senha"];
        $id_alu_fk = $_POST["id_alu_fk"];

        $sql = "INSERT INTO Usuario VALUES (null, '$nome', '$cpf', '$sexo', '$data_nascimento', '$celular', '$email', '$endereco', '$senha', '$id_alu_fk');";

        if (!is_numeric($id_alu_fk)) {
            echo "ID de aluguel inválido!";
            exit; // Encerra o script
        }

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