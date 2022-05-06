<?php



$variaveis_extras = http_build_query($_POST);
$url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=&sDsSenha=&sCdAvisoRecebimento=n&sCdMaoPropria=n&nVlValorDeclarado=0&nVlDiametro=0&sCepOrigem=21930376&nVlPeso=1&nCdFormato=1&nVlComprimento=20&nVlAltura=10&nVlLargura=30&StrRetorno=xml&nIndicaCalculo=3&nCdFormato=1&nCdServico=04510&" . $variaveis_extras;

$unparsedResult = file_get_contents($url);

$parsedResult = simplexml_load_string($unparsedResult);

echo($unparsedResult);

$retorno = array(
    'preco' => strval($parsedResult->cServico->Valor),
    'prazo' => strval($parsedResult->cServico->PrazoEntrega)
);
die(json_encode($retorno));

?>