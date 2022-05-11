<?php


namespace App\WebService;


require_once $_SERVER['DOCUMENT_ROOT'] . "projetocurso/phpconfgs/_confg.php";



class Correios{

    const URL_BASE = 'http://ws.correios.com.br';


    const SERVICO_SEDEX        = '04014';
    const SERVICO_SEDEX_12     = '04782';
    const SERVICO_SEDEX_10     = '04790';
    const SERVICO_SEDEX_HOJE   = '04804';
    const SERVICO_SEDEX_PCA    = '04510';


    const FORMATO_CAIXA_PACOTE     = '1';
    const FORMATO_ROLO_PRISMA      = '2';
    const FORMATO_ENVELOPE         = '3';


    /** 
    * código da empresa com contrato
    *   @var string
    */
    private $codigoEmpresa = '';
    
    /** 
    * Senha da empresa com contrato
    *   @var string
    */
    private $senhaEmpresa = '';

    public function __construct($codigoEmpresa ='', $senhaEmpresa ='') {
        $this->codigoEmpresa = $codigoEmpresa;
        $this->senhaEmpresa  = $senhaEmpresa;
    }

    public function CalcularFrete($codigoServico, $cepOrigem = 21930376, $cepDestino, $peso, $formato, $comprimeto, $altura, $largura, $diametro = 0, $maoPropria = false, $valorDeclarado = 0, $avisoRecebimento = false) {

        $parametros = [
            'nCdEmpresa' => $this->codigoEmpresa,
            'sDsSenha' => $this->senhaEmpresa,
            'nCdServico' => $codigoServico,
            'sCepOrigem' => $cepOrigem,
            'sCepDestino' => $cepDestino,
            'nVlPeso' => $peso,
            'nCdFormato' => $formato,
            'nVlComprimento' => $comprimeto,
            'nVlAltura' => $altura,
            'nVlLargura' => $largura,
            'nVlDiametro' => $diametro,
            'sCdMaoPropria' => $maoPropria ? 'S' : 'N',
            'nVlValorDeclarado' => $valorDeclarado,
            'sCdAvisoRecebimento' => $avisoRecebimento ? 'S' : 'N',
            'StrRetorno' => 'xml'
        ];

        $query = http_build_query($parametros);


        $resultado = $this->get('/calculador/CalcPrecoPrazo.aspx?'.$query);

        // retorna os dados do frete calculado
        return $resultado ? $resultado ->cServico : null;

    }

    public function get($resource) {
        $endpoint = self::URL_BASE.$resource;

        $curl = curl_init();

        curl_setopt_array($curl, 
            [CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
    ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return strlen($response) ? simplexml_load_string($response) : null;
    }
}




// use \App\WebService\Correios;

require __DIR__.'/vendor/autoload.php';


$obCorreios = new Correios();


$codigoServico = Correios::SERVICO_SEDEX ;
$cepOrigem = '21930376';
$cepDestino = '13860970';
$peso = 1;
$formato = Correios::FORMATO_CAIXA_PACOTE ;
$comprimeto = 15;
$altura = 15;
$largura = 15;
$diametro = 0;
$maoPropria = false;
$valorDeclarado = 0;
$avisoRecebimento = false;


$frete = $obCorreios->CalcularFrete(
    $codigoServico, $cepOrigem, $cepDestino, $peso, $formato, $comprimeto, $altura, $largura, $diametro, $maoPropria, $valorDeclarado, $avisoRecebimento
);

//verifica o resultado 
if (!$frete) {
    die('Problema ao calcular o frete');
}

//verifica o erro
if (strlen($frete -> MsgErro)) {
    die('Erro :' .$resultado-> MsgErro);
}



$valores = array(
    'preco' => strval($frete->Valor),
    'prazo' => strval($frete->PrazoEntrega)
);

// die(json_encode($valores));



//Imprime os dados da consulta 
// echo 'Cep Origem :' .$cepOrigem. "\n";
// echo 'Cep Destino :' .$cepDestino. "\n";
// echo 'Valor :' .$frete->Valor. "\n";
// echo 'Prazo :' .$frete->PrazoEntrega. "\n";



























// $variaveis_extras = http_build_query($_POST);
// $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=&sDsSenha=&sCdAvisoRecebimento=n&sCdMaoPropria=n&nVlValorDeclarado=0&nVlDiametro=0&sCepOrigem=21930376&nVlPeso=1&nCdFormato=1&nVlComprimento=20&nVlAltura=10&nVlLargura=30&StrRetorno=xml&nIndicaCalculo=3&nCdFormato=1&nCdServico=04510&" . $variaveis_extras;

// $unparsedResult = file_get_contents($url);

// $parsedResult = simplexml_load_string($unparsedResult);

// echo($unparsedResult);

// $retorno = array(
//     'preco' => strval($parsedResult->cServico->Valor),
//     'prazo' => strval($parsedResult->cServico->PrazoEntrega)
// );
// die(json_encode($retorno));




?>