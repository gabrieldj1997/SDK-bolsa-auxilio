# SDK-bolsa-auxilio - PHP

SDK para incluir ao projeto, ao qual visa facilitar o uso da API do SERPRO sobre Bolsa Familia e Auxilio Emergencial

===== Requisitos ==============
- PHP
- Composer
- Gerar uma chave de acesso pessoal para ultilização da API
- A chave de acesso é obtida através do gov.br

===== Instalação ==============
- Copie o projeto para uma pasta dentro da aplicação
- Dentro da pasta do SDK execute o comando "composer install"
- Ainda dentro da pasta execute o comando "composer dump-autoload"

Documentação

//Carregar a classe da API
require 'sdk-api/SerproApi.php';

//Intancializar a classe com a URL base e a chave da API
$serpro = new SerproApi('http://api.portaldatransparencia.gov.br/api-de-dados', [CHAVE DE ACESSO]);

//Metodo de consulta da bolsa familia por CPF ou NIS
//Params = 1-AnoMesCompetencia; 2-AnoMesReferencia; 3-CPF ou NIS; 4-Pagina
$result = $serpro->consultarBolsaCpfNis("202006","202003","00000000000","1");


//Metodo de consulta da bolsa familia por municipio
//Params = 1-CodigoIbge; 2-mesAno; 3-pagina
$result = $serpro->consultarBolsaMunicipio("5300108","202005","1");

//Metodo de consulta das parcelas sacadas da bolsa familia por NIS
//Params = 1-AnoMesCompetencia; 2-AnoMesReferencia; 3-NIS; 4-Pagina
$result = $serpro->consultarBolsaCpfNis("202005","202005","0000000000","1");

//Metodo de consulta de benifeciario do auxilio por municipio
//Params = 1-codigoIbge; 2-mesAno; 3-pagina
$result = $serpro->consultarAuxilioBeneficiarioMunicipio("5300108", "202005","1");

//Metodo de consulta de benifeciario do auxilio por NIS
//Params = 1-CpfNisBenifeciario; 2-CpfNisResponsavelFamiliar; 3-pagina
$result = $serpro->consultarAuxilioCpfNis("00000", "00000000","1");

//Metodo de consulta dos dados do auxilio por municipio
//Params = 1-codigoIbge; 2-mesAno; 3-pagina
$result = $serpro->consultarAuxilioMunicipio("5300108", "202005","1");
