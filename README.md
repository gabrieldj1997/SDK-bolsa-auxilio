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

- Caso no seu projeto o metodo 'require' não funcione para importar a classe
deverá seguir os seguintes passos:

- Abra o arquivo 'composer.json' de seu projeto
- Dentro da chave 'autoload' adicione a chave 'psr-4' que tem como valor um objeto
com a seguinte estrutura:
- { "SdkApiSerpro\\" : "SDK-bolsa-auxilio/" }
- Após isso execute o comando 'composer dump-autoload' em seu projeto

===== Como utilizar ===========
- Conferir a documentação dos métodos no arquivo "apiDocumentacao.php"
- Para testar o funcionamento do SDK basta abrir o arquivo "apiDocumentacao.php"
caso esteja tudo certo não é para gerar erros.