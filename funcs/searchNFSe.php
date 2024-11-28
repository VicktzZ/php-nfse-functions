<?php
/**
 * Consulta uma NFSe já emitida utilizando o número da NFSe.
 *
 * Esta função realiza uma consulta na API da NFSe com o número da NFSe ou chave de acesso.
 * 
 * @param string $num_nfse Número ou chave de acesso da NFSe a ser consultada.
 * @return string Resultado da consulta da NFSe, com as informações detalhadas ou erro.
 */
function searchNFSe($num_nfse) {
    $url = API_URL . '/search_nfse'; // Exemplo de URL para consulta de NFSe
    $data = json_encode([
        'num_nfse' => $num_nfse,
    ]);

    $result = makeRequest($url, $data);
    return $result;
}