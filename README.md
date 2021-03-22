1 - Faça o download do Projeto 3

2 - Entre na pasta Projeto 3

3 - Abra o git bash ou cmd com o endereço da pasta Projeto 3

4 - Execute o comando: git clone https://github.com/Laradock/laradock.git

5 - Entre na pasta laradock que foi criada

6 - Abra o git bash ou cmd com o endereço da pasta laradock

7 - Execute o comando: cp env-example .env

8 - Inicie o docker desktop

9 - Execute o comando: docker-compose up -d nginx mysql phpmyadmin

    Obs: Caso ocorra algum erro de porta ao fazer o passo 9

    1 - Abra o arquivo .env que está dentro da pasta laradock

    2 - Modifique a porta da aplicação que ocorreu o erro

    3 - Salve e tente executar novamente

10 - Volte para pasta Projeto 3

11 - Abra o git bash ou cmd com o endereço da pasta Projeto 3

12 - Execute o comando: php artisan migrate

13 - Execute o comando: php artisan db:seed

    Obs: Se você não conseguir fazer os passos 12 e 13

    1 - Abra o navegador e escreva localhost:(PORTA DO PHPHMYADMIN) na barra de endereço para acessar o phpmyadmin

    2 - Coloque servidor: mysql, usuário: root e senha: root

    3 - Clique em novo e crie um banco de dados com o nome: default e charset: utf8mb4_unicode_ci

    4 - Tente fazer os passos 12 e 13 novamente

14 - Abra o arquivo .env com um editor de texto que está dentro da pasta Projeto 3

15 - Encontre o comando DB_HOST=127.0.0.1 e troque para DB_HOST=mysql

16 - Salve a alteração e abra o navegador

17 - Escreva localhost na barra de endereço do navegador para acessar a aplicação

18 - Teste o projeto
