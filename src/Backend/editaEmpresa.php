<?php
session_start();

function Senha($psswd){
    $algoritmo = "AES-256-CBC";
    $chave = "_B_3Ats";
    $iv = "wNYtCnelXfOa6uiJ";

    $msg_criptografada = openssl_encrypt($psswd, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);
    return base64_encode($msg_criptografada);
}   


$servername = "35.225.119.62";
$username = "root";
$password = "COTemig123";
$dbname = "Buffeats";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
$id = $_SESSION['id_empresa'];
$email = $_POST["email"];
$nome = $_POST["nome"];
$numero = $_POST["contato"];
$senha = Senha($_POST["senha"]);

$nome_novo = $nome;
$email_novo = $email;
$numero_novo = $numero;
$senha_novo = $senha;

// Preparar a consulta SQL com um placeholder (?)
$sql1 = "UPDATE CADASTRO_EMPRESA SET nome_empresa = ? WHERE id_empresa = ?";
$sql2 = "UPDATE CADASTRO_EMPRESA SET email = ? WHERE id_empresa = ?";
$sql3 = "UPDATE CADASTRO_EMPRESA SET num_contato = ? WHERE id_empresa = ?";
$sql4 = "UPDATE CADASTRO_EMPRESA SET senha = ? WHERE id_empresa = ?";

// Preparar a declaração SQL com a consulta
$stmt1 = $conn->prepare($sql1);
$stmt2 = $conn->prepare($sql2);
$stmt3 = $conn->prepare($sql3);
$stmt4 = $conn->prepare($sql4);

// Vincular os valores às variáveis na declaração preparada
$stmt1->bind_param("ss", $nome, $id);
$stmt2->bind_param("ss", $email, $id);
$stmt3->bind_param("ss", $numero, $id);
$stmt4->bind_param("ss", $senha, $id);
// Executar a declaração preparada
if ($stmt1->execute()) {
    header('Location: ../Views/confirmacliente.php');
} else {
    echo "Erro ao atualizar dados: " . $stmt1->error;
}

if ($stmt2->execute()) {
    echo "Dados atualizados com sucesso!";
} else {
    echo "Erro ao atualizar dados: " . $stmt2->error;
}
if ($stmt3->execute()) {
    echo "Dados atualizados com sucesso!";
} else {
    echo "Erro ao atualizar dados: " . $stmt3->error;
}
if ($stmt4->execute()) {
    echo "Dados atualizados com sucesso!";
} else {
    echo "Erro ao atualizar dados: " . $stmt4->error;
}
$_SESSION["nomeempresa"] = $nome_novo;
$_SESSION["email"] = $email_novo;
$_SESSION["password"] = $senha_novo;
$_SESSION["numero"] = $numero_novo ;


$stmt1->close();
$stmt2->close();
$stmt3->close();
$stmt4->close();
$conn->close();
?>