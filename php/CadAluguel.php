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

        $Nome = $_POST["Nome"];
        $Sobrenome = $_POST["Sobrenome"];
        $Cpf = $_POST["Cpf"];
        $Telefone = $_POST["Telefone"];
        $Data_de_validade = $_POST["Data_de_validade"];
        $Codigo_de_seguranca = $_POST["Codigo_de_seguranca"];
        $Pagamento = $_POST["Pagamento"];
        $Numero_do_cartao = $_POST["Numero_do_cartao"];

        $sql = "INSERT INTO Aluguel VALUES (null, '$Nome', '$Sobrenome', '$Cpf', '$Telefone', '$Data_de_validade', '$Codigo_de_seguranca', '$Pagamento', '$Numero_do_cartao');";

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