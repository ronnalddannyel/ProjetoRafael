
<?php

function buscarEnderecoPorCEP($cep) {
    // Formatando o CEP para remover caracteres especiais
    $cep = preg_replace("/[^0-9]/", "", $cep);

    // Verificando se o CEP possui o formato correto
    if (preg_match("/^[0-9]{8}$/", $cep)) {
        // URL da API ViaCEP para consultar o endereço pelo CEP
        $url = "https://viacep.com.br/ws/{$cep}/json/";

        // Iniciando uma requisição cURL
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Enviando a requisição e obtendo a resposta
        $response = curl_exec($curl);

        // Verificando se houve algum erro na requisição
        if ($response === false) {
            $error = curl_error($curl);
            curl_close($curl);
            return "Erro ao acessar a API ViaCEP: {$error}";
        }

        // Convertendo a resposta JSON para um array associativo
        $data = json_decode($response, true);

        // Verificando se a resposta contém dados válidos
        if (isset($data['erro'])) {
            return "CEP não encontrado";
        } else {
            // Construindo o endereço a partir dos dados obtidos
            $endereco = "{$data['logradouro']}, {$data['bairro']}, {$data['localidade']} - {$data['uf']}";
            return $endereco;
        }
    } else {
        return "CEP inválido";
    }
}

?>
