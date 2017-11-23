# Blog

Criação de um painel administrativo para um blog com laravel e vueJS

Confira o passo a passo para a criação da aplição 

#Instalaçao
	
	ºRequisitos:[Composer, Nodejs]
	ºInstalação do laravel :  https://laravel.com/docs/5.5/installation
	ºInstalação do Node: https://nodejs.org/en/download/package-manager/

#Configuração - Passo a Passo 

1- Crie uma base de dados e configure seu arquivo .env
2- Execute o comando no diretorio da aplicação: php artisan migrate
3- Execute o comando no diretorio da aplicação: php artisan meke:auth
4- Execute o comando no diertorio da aplicação: npm install
5- Execute o comando no diretorio da aplicação: php artisan make:controller Admin/ArtigoController --resource 

#Produção - criando componentes

1- No diretorio da aplicação em resources/assets/js/components/ , você deve criar os arquivos .vue e definir seus componentes.
2- Para usar um componente você deve acessar no diretorio js o arquivo app.js e importar o seu arquivo .vue. O laravel já deixa uma importação pronta para exemplo, basta você adicionar as tag correspondente ao componente na sua view que tudo estara funcionando. 
3- configure as rotas para que tudo saia como se espera.

