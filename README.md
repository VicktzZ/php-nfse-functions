# Integração NFSe (Nota Fiscal de Serviço Eletrônica)

Este repositório contém as funções para integração com a API de Nota Fiscal de Serviço Eletrônica (NFSe), permitindo a emissão, consulta e cancelamento de NFSes. O código foi escrito em PHP e utiliza requisições HTTP para interagir com o serviço.

## Funcionalidades

- **Envio de RPS (Recibo Provisório de Serviços)**: Envia o RPS para a API para iniciar o processo de emissão da NFSe.
- **Consulta de NFSe emitida**: Consulta uma NFSe já emitida, retornando seus detalhes.
- **Cancelamento de NFSe**: Realiza o cancelamento de uma NFSe previamente emitida.

## Requisitos

Para utilizar este código, é necessário ter o PHP instalado e acesso à API de NFSe do seu município (ou outro sistema de emissão de NFSe).

- PHP 7.4 ou superior.
- Acesso à API NFSe (URL base configurável).

## Instalação

1. **Baixe o repositório**:
   Clone o repositório ou baixe o código em seu computador.

   ```bash
   git clone https://github.com/seu-usuario/integração-nfse.git
    ```
2. **Configure a URL da API**
    No arquivo nfse.php, altere a constante API_URL para a URL base da API NFSe do seu município ou da plataforma de NFSe que você está utilizando.

    ```php
    define('API_URL', 'https://api.nfse.com');
    ```

3. **Instale o CURL no PHP**
   ```bash
    sudo apt install php-curl
   ```

## Como usar

1. **Enviar RPS (Recibo Provisório de Serviços)**
Para enviar um RPS, você pode utilizar a função `sendNFSe($rps)`.

    ```php
    <?php
        // Incluindo o arquivo com as funções
        require 'nfse.php';

        // Dados do RPS
        $rps = [
            'numero_rps' => '12345',
            'data_emissao' => '2024-10-10',
            'valor_total' => 100.00,
            'prestador' => [
                'cnpj' => '12345678000195',
                'inscricao_municipal' => '1234567',
            ],
            'tomador' => [
                'cpf_cnpj' => '12345678901',
                'razao_social' => 'Empresa Exemplo Ltda.',
            ]
        ];

        // Enviar RPS
        $result = sendNFSe($rps);
        echo $resul;
    ?>
    ```

2. **Consultar NFSe Emitida**
Para consultar uma NFSe emitida, você pode usar a função `searchNFSe($numero_nfse)`.

    ```php
    <?php
        // Número ou chave de acesso da NFSe
        $num_nfse = '123456789012345';

        $result = searchNFSe($num_nfse);
        echo $result;
    ?>
    ```

1. **Enviar RPS (Recibo Provisório de Serviços)**
Para enviar um RPS, você pode utilizar a função `sendNFSe($rps)`.

    ```php
    <?php
        // Número da NFSe e motivo do cancelamento
        $nume_nfse = '123456789012345';
        $reason = 'Erro no preenchimento dos dados';

        $result = cancelNFSe($num_nfse, $reason);
        echo $resultado;
    ?>
    ```