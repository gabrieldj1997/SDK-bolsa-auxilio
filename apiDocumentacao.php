<?php
//Carregar a classe da API
//Adicionando a classe SerproApi via 'require'
require dirname(__FILE__).'/SerproApi.php';
//Adicionando a classe SerproApi via 'use'
// use SdkApiSerpro\SerproApi;

//Intancializar a classe com a URL base e a chave da API
$serpro = new SerproApi('http://api.portaldatransparencia.gov.br/api-de-dados', "{$suaChavepessoal}");

//Metodo de consulta da bolsa familia por CPF ou NIS
//Params = 1-AnoMesCompetencia; 2-AnoMesReferencia; 3-CPF ou NIS; 4-Pagina
$result = $serpro->consultarBolsaCpfNis("202006","202003","01942057113","1");
echo '<pre>';
var_dump($result);
echo '</pre>';

//Metodo de consulta da bolsa familia por municipio
//Params = 1-CodigoIbge; 2-mesAno; 3-pagina
$result = $serpro->consultarBolsaMunicipio("5300108","202005","1");
echo '<pre>';
var_dump($result);
echo '</pre>';

//Metodo de consulta das parcelas sacadas da bolsa familia por NIS
//Params = 1-AnoMesCompetencia; 2-AnoMesReferencia; 3-NIS; 4-Pagina
$result = $serpro->consultarBolsaCpfNis("202005","202005","0000000000","1");
echo '<pre>';
var_dump($result);
echo '</pre>';

//Metodo de consulta de benifeciario do auxilio por municipio
//Params = 1-codigoIbge; 2-mesAno; 3-pagina
$result = $serpro->consultarAuxilioBeneficiarioMunicipio("5221858", "202107","1");
echo '<pre>';
var_dump($result);
echo '</pre>';

//Metodo de consulta de benifeciario do auxilio por NIS
//Params = 1-CpfNisBenifeciario; 2-CpfNisResponsavelFamiliar; 3-pagina
$result = $serpro->consultarAuxilioCpfNis("00000", "00000000","1");
echo '<pre>';
var_dump($result);
echo '</pre>';

//Metodo de consulta dos dados do auxilio por municipio
//Params = 1-codigoIbge; 2-mesAno; 3-pagina
echo '<pre>';
$result = $serpro->consultarAuxilioMunicipio("5300108", "202005","1");
var_dump($result);
echo '</pre>';

?>