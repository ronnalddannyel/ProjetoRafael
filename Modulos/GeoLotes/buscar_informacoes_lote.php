<?php
// Conectar ao banco de dados (substitua as credenciais conforme necessário)
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
  die("Erro de conexão: " . $conn->connect_error);
}

// Verificar se o nome do lote foi recebido na solicitação AJAX
if (isset($_POST['nome_lote'])) {
  $nomeLote = $_POST['nome_lote'];

  // Consultar o banco de dados para obter informações do lote com base no nome
  $sql = "SELECT * FROM sua_tabela WHERE nome_lote = '$nomeLote'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Gerar HTML com as informações do lote
    $row = $result->fetch_assoc();
    $informacoes = "Nome do Lote: " . $row['nome_lote'] . "<br>";
    $informacoes .= "Proprietário: " . $row['proprietario'] . "<br>";
    // Adicione outras informações conforme necessário

    // Retornar as informações como resposta AJAX
    echo $informacoes;
  } else {
    echo "Nenhuma informação encontrada para o lote: " . $nomeLote;
  }
} else {
  echo "Nome do lote não fornecido na solicitação.";
}

$conn->close();
?>
