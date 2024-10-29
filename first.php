<?php

// Defina a URL e a chave da API
$url = 'https://sistema81.smsbarato.com.br/send';
$chave = 'SUA_CHAVE_DE_IDENTIFICACAO';

// Parâmetros do SMS
$destinatario = '11988887777';  // Número do destinatário, apenas números, com DDD
$mensagem = 'Sua mensagem de teste aqui, até 160 caracteres, sem acentos ou quebras de linha';

// Cria a URL com os parâmetros
$urlEnvio = $url . '?chave=' . urlencode($chave) . '&dest=' . urlencode($destinatario) . '&text=' . urlencode($mensagem);

// Faz a solicitação
$resposta = file_get_contents($urlEnvio);

// Verifica a resposta
if (is_numeric($resposta)) {
    echo "SMS agendado com sucesso! ID da mensagem: " . $resposta;
} else {
    echo "Erro ao agendar SMS: " . $resposta;
}

?>

