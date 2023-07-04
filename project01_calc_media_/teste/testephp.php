<?php

$ingredientes = $_POST["ingredientes"];
echo $ingredientes;

// Informações do Banco
$servername = "localhost";
$username = "root";
$password = "0123";
$database = "MEDIA";

// Criando uma conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Conexão bem-sucedida";

// Dados a serem inseridos


// Consulta SQL de inserção
$sql = "INSERT INTO NOTAS VALUES (NULL, '$ingredientes')";

if ($conn->query($sql) === true) {
    echo "Dados inseridos com sucesso";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}


// Fechando a conexão
$conn->close();
?>
