<?php

/**
 * Cancela uma NFSe previamente emitida.
 *
 * Esta função faz a requisição de cancelamento de uma NFSe com o motivo fornecido.
 * 
 * @param string $num_nfse Número da NFSe a ser cancelada.
 * @param string $reason Motivo para o cancelamento da NFSe.
 * @return string Resultado do cancelamento da NFSe, indicando sucesso ou falha.
 */
function cancelNFSe($num_nfse, $reason)
{
    $url = API_URL . '/cancelar_nfse'; // Exemplo de URL para cancelamento de NFSe
    $data = json_encode([
        'num_nfse' => $num_nfse,
        'reason' => $reason,
    ]);

    $result = makeRequest($url, $data);
    return $result;
}
