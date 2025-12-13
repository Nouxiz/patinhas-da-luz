<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Acesso inválido";
    exit;
}
$nome     = $_POST['nome'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
$idAnimal = $_POST['id_animal'];


$sql = "INSERT INTO interesse_adocao 
        (nome, telefone, mensagem, id_animal)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $nome, $telefone, $mensagem, $idAnimal);

if ($stmt->execute()) {
    echo "<h2>Interesse registrado com sucesso!</h2>";
    echo "<p>Em breve entraremos em contato.</p>";
    echo "<a href='../apadrinhe.php'>Voltar</a>";
} else {
    echo "Erro ao salvar interesse.";
}
?>
