<?php

/**
 * Função auxiliar para realizar a requisição HTTP para a API.
 *
 * Esta função é responsável por enviar as requisições HTTP para a API da NFSe utilizando o método POST.
 * 
 * @param string $url URL de destino da requisição.
 * @param string $data Dados a serem enviados na requisição, geralmente em formato JSON.
 * @return string Resposta da API, geralmente JSON, contendo o resultado da operação.
 */
function makeRequest($url, $data)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
    ]);

    // Executar a requisição
    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        // Se ocorrer erro na requisição
        return 'Erro: ' . curl_error($ch);
    }

    curl_close($ch);

    return $response; // Retorna a resposta da API
}
