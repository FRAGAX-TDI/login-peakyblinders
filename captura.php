<?php
// Verificando se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Validando se os dados não estão vazios
    if (!empty($_POST)) {
        // Criando uma string com os dados recebidos
        $dados = print_r($_POST, true);

        // Adicionando os dados ao arquivo (modo de anexação)
        file_put_contents('dados.txt', $dados.PHP_EOL, FILE_APPEND);

        // Enviando uma resposta de sucesso
        echo 'Dados salvos com sucesso!';
    } else {
        // Enviando uma resposta de erro se os dados estiverem vazios
        echo 'Erro: Email e senha são obrigatórios!';
    }
} else {
    // Enviando uma resposta de erro se a requisição não for POST
    echo 'Erro: Método de requisição inválido!';
}
?>

