<?php

// Verifica se os parâmetros necessários estão presentes
if (isset($_GET['nome']) && isset($_GET['morada']) && isset($_GET['cod']) && isset($_GET['quantidade'])) {
    $nome = $_GET['nome'];
    $morada = $_GET['morada'];
    $cod = $_GET['cod'];
    $quantidade = $_GET['quantidade'];

    // Conecta ao banco de dados SQLite
    $db = new SQLite3('loja.sqlite');

    // Prepara a consulta para evitar injeção SQL
    $stmt = $db->prepare("INSERT INTO Encomendas (nome, morada, cod, quantidade) VALUES (:nome, :morada, :cod, :quantidade)");
    $stmt->bindValue(':nome', $nome, SQLITE3_TEXT);
    $stmt->bindValue(':morada', $morada, SQLITE3_TEXT);
    $stmt->bindValue(':cod', $cod, SQLITE3_INTEGER);
    $stmt->bindValue(':quantidade', $quantidade, SQLITE3_INTEGER);

    // Executa a consulta
    $stmt->execute();

    // Fecha a conexão com o banco de dados
    $db->close();

    // Confirmação da encomenda
    echo "<p>A encomenda foi registada.</p>";
    echo "<a href='lista.php'>Voltar ao inicio</a>";
} else {
    echo "<p>Parâmetros insuficientes para registrar a encomenda.</p>";
    echo "<a href='processar_pedido.html'>Voltar ao formulário</a>";
}

?>

