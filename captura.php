<?php
// Verificando se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $dados=file_get_contents("php://input");
    // Validando se os dados não estão vazios
    if (!empty($dados)) {
        // Criando uma string com os dados recebidos

        // Adicionando os dados ao arquivo (modo de anexação)
        file_put_contents("php://stderr", $dados."\n");

        // Enviando uma resposta de sucess
        echo 'Dados salvos com sucesso!';
    } else {
        // Enviando uma resposta de erro se os dados estiverem vazios
        echo 'Erro: Nenhum dado enviado';
    }
} else {
    // Enviando uma resposta de erro se a requisição não for POST
    echo 'Erro: Método de requisição inválido!';
}
?>

