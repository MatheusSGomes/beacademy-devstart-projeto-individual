# Projeto Individual: Plataforma de classificados online

Projeto desenvolvido durante o programa DevStart da PayLivre com a BeAcademy.

O tema escolhido foi uma plataforma de classificados online. Onde os usuários podem anunciar produtos (cadastrar), ler a produtos anunciados, atualizar os seus anúncios e apagar. 

O administrador da plataforma consegue cadastrar, listar, atualizar e apagar usuários, também consegue cadastrar, listar, atualizar e apagar categorias de produtos.

A plataforma foi construída com autenticação e o framework CSS escolhido foi bootstrap 5. Os usuários podem buscar por produtos anunciados e listar os produtos por categorias.

Foi implementado um contador de visitas para cada produto, para que cada usuário saiba quantas visitas o seu produto teve.

O administrator recebe um dashboard especial onde consegue gerenciar todos os usuários, produtos e categorias da plataforma. O usuário comum recebe no seu dashboard o controle dos seus produtos anunciados.

## Requisitos do projeto

- [x] Criar um CRUD em PHP, utilizando Laravel

- [x] O sistema deverá possuir autenticação

- [x] Utilizar o banco de dados Mysql para criar uma tabela - de sua preferência, com 10 atributos

- [x] O CRUD deve conter os métodos de Insert, Update, Delete e Read dessa tabela

- [x] As ações deverão ser realizadas através de uma página web, portanto o sistema deverá conter um frontend que se comunique com o backend

- [x] A solução deve ter pelo menos 30% de testes unitários

- [x] O projeto deverá ser armazenado no repositório do github

## Deploy

A plataforma escolhida para deploy da aplicação foi a Heroku:

https://projeto-classificados.herokuapp.com/

## Tecnologias

- PHP 8.1

- Laravel 9

- MySQL / MariaDB

## Modelagem do banco de dados

![](modelagem-banco-de-dados.png)

## Telas do projeto

### Página inicial

![](Screenshot%20-%201%20-%20Home.png)

### Página de produto

![](Screenshot%20-%202%20-%20Página%20de%20produto.png)

#### Opção de ver detalhes do produto

Ao clicar na imagem do produto o cliente pode ver detalhes.

![](Screenshot%20-%2015%20-%20Detalhes%20do%20produto.png)

### Página de produtos de cada categoria

![](Screenshot%20-%203%20-%20Página%20de%20produtos%20por%20categoria.png)

### Página de busca por produtos

![](Screenshot%20-%204%20-%20Página%20de%20busca%20de%20produtos.png)

### Página de cadastro de novos usuários

![](Screenshot%20-%205%20-%20Página%20de%20cadastro%20de%20usuários.png)

### Página de login

![](Screenshot%20-%206%20-%20Página%20de%20login.png)

### Dashboard do usuário comum

![](Screenshot%20-%207%20-%20Dashboard%20usuário%20comum.png)

### Página de anúncio de produtos

![](Screenshot%20-%208%20-%20Página%20de%20cadastro%20de%20produtos.png)

### Página de editar anúncio

![](Screenshot%20-%209%20-%20Página%20de%20editar%20anuncio.png)

### Página de editar perfil do usuário

![](Screenshot%20-%209%20-%20Página%20de%20editar%20perfil.png)

### Dashboard do administrador

![](Screenshot%20-%2010%20-%20Dashboard%20do%20administrador.png)

### Lista de todos os produtos anunciados na plataforma

![](Screenshot%20-%2011%20-%20Listar%20todos%20os%20produtos%20anunciados.png)

### Lista de todas as categorias cadastradas

Categorias disponíveis para usuários cadastrar produtos

![](Screenshot%20-%2012%20-%20Listar%20todos%20as%20categorias%20cadastradas.png)

### Listar todos os usuários cadastrados na plataforma

![](Screenshot%20-%2013%20-%20Listar%20todos%20as%20usuários%20cadastrados.png)

### Sidebar para o usuário logado navegar pela plataforma

![](Screenshot%20-%2014%20-%20Sidebar%20Dashboard.png)
