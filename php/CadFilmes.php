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

        $titulo = $_POST["titulo"];
        $produtor = $_POST["produtor"];
        $ano = $_POST["ano"];
        $categoria = $_POST["categoria"];
        $classificacao = $_POST["classificacao"];
        $duracao = $_POST["duracao"];
        $elenco = $_POST["elenco"];
        $sinopse = $_POST["sinopse"];
        $id_alu_fk = $_POST["id_alu_fk"];

        $sql = "INSERT INTO Filmes (titulo_fil, produtor_fil, ano_fil, categoria_fil, classificacao_fil, duracao_fil, elenco_fil, sinopse_fil, id_alu_fk) VALUES ('$titulo', '$produtor', '$ano', '$categoria', '$classificacao', '$duracao', '$elenco', '$sinopse', $id_alu_fk);";

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