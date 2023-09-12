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

        $nome = $_POST["nome"];
        $temporada = $_POST["temporada"];
        $episodios = $_POST["episodios"];
        $data_de_lancamento = $_POST["data_de_lancamento"];
        $classificacao = $_POST["classificacao"];
        $categoria = $_POST["categoria"];
        $elenco = $_POST["elenco"];
        $sinopse = $_POST["sinopse"];
        $id_alu_fk = $_POST["id_alu_fk"];

        $sql = "INSERT INTO Serie VALUES (null, '$nome', '$temporada', '$episodios', '$data_de_lancamento', '$classificacao', '$categoria', '$elenco', '$sinopse', '$id_alu_fk');";

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