# pwii-renato-serafim
Aulas de Programação Web II com os professores João Siles e Ricardo Palhares


## Como usar Laravel
O Laravel é um framework PHP, que oferece múltiplos serviços de forma robusta para desenvolvimento web 
***

**Requisitos:**

 - PHP >= 8.1
 - Composer
 - My SQL
  - Node.js

***
**INSTALAÇÃO**
Para a instalação de todos os requisitos serem realizadas corretamente use o comando no modo administrador no terminal:

```

    Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))

```

Para verificar se a instalação ocorreu 

    composer -v

***
**CRIANDO PROJETO**
Execute:

    laravel new example-app
Após isso abra o diretório do projeto e inicie o servidor Laravel

 1. `cd example-app`
 2. `npm install && npm run build`
 3. `composer run dev`

Após isso o local host será mostrado no terminal, o acessando poderá abrir seu servidor e usa-lo 

Após o programa ser enviado ao Github, para ser aberto novamente um passo a passo deve ser realizado.

***
1. Para instalar as dependências do projeto use

    composer install

2. Para instalar as dependências do projeto javascript use

    npm install

3. Se o projeto já tiver webpack ou vite use 

    npm run build

 4. Copiar o arquivo .env.example e renomeie a cópia para .env

4. Crie uma key para seu projeto usando 

    php artisan key:generate


5. Rodar o Migration para abrir o banco de dados usando

    php artisan migrate



## Como usar o git bash para programar no seu Github


## Entre no seu github
- Entre ou crie uma conta do github
- Crie um repositório do git
- Copie o link do seu repositório do git

## Baixe o git bash e o xampp

- xampp : https://www.apachefriends.org/pt_br/index.html
- git bash : https://git-scm.com/downloads

## Clonar o repositório
- abra a pasta do xampp > htdocs
- aperte o botão direito do mouse
- aperte em mais mostrar mais opsções 
- use o gitbash here na pasta
- após isso uma aba irá abrir
## Digite:
- git config --global user.name " *seu nome de usuário* "
- git config --global user.email " *seu email do git* "
- git clone ***link do repositório do git***
- cd ***nome do seu repositório do git***
- code .
- - ***Após isso você pode começar a programar seu código no vscode***
- - ***Depois de terminar volte para o gitbash, ainda direcionado em sua pasta e digite:***
- git status
- git add .
- git commit -m "***descrição do seu projeto***"
- git push

#### Após isso irá aparecer uma aba de login do github, preencha o campo com seus dados.

Agora feche o gitbash e entre no seu github pelo navegador e confira seus códigos feitos anteriormente.


