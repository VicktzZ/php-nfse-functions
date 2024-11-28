<?php
define('API_URL', 'https://api.nfse.com');

/**
 * Envia a NFSe (RPS) para o sistema de emissão de NFSe.
 *
 * Esta função envia o RPS (Recibo Provisório de Serviços) para a API, iniciando o processo de emissão da NFSe.
 * 
 * @param array $rps Dados do RPS a ser enviado para a API.
 * @return string Resultado da requisição, geralmente JSON com sucesso ou erro.
 */
function sendNFSe($rps)
{
    $url = API_URL . '/send_rps'; // Exemplo de URL para envio do RPS
    $data = json_encode([
        'rps' => $rps,
    ]);

    $result = makeRequest($url, $data);
    return $result;
}
