<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- MILENE SILVEIRA KRUGUEL -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção de Dados</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        require_once('conexao.php');

        $nome_completo = $_POST["nome_completo"];
        $email = $_POST["email"];
        $celular = $_POST["celular"];
        $data_de_nascimento = $_POST["data_de_nascimento"];
        $sexo = $_POST["sexo"];
        $assunto = $_POST["assunto"];
        $sua_mensagem = $_POST["sua_mensagem"];
        $tipo_mensagem = $_POST["tipo_mensagem"];

        $sql = "INSERT INTO Contato VALUES (null, '$nome_completo', '$email', '$celular', '$data_de_nascimento', '$sexo', '$assunto', '$sua_mensagem', '$tipo_mensagem');";

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