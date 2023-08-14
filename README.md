## PROJECT
O projeto consiste em um simples sistema de busca por usuários do GitHub, onde através de um input de pesquisa
os resultados encontrados são disponibilizados em uma tabela. O menu direciona para a pesquisa através de duas
tecnologias muito comuns no mercado: PHP (Curl method) e JavaScript (Fetch method). É possível realizar a pesquisa
nos dois modelos.

As requisições via API de ambas as tecnologias são feitas através de métodos nativos das linguagens.


## PROJECT RUN

O projeto segue os padrões de desenvolvimento Laravel
Não há banco de dados para realizar importação
Ao clonar o projeto:
 - composer update;
 - npm install;
 - npm run dev (mantenha o terminal aberto com o npm em execução).
Em um novo terminal:
 - copie e cole a .env.example e renomei-a para .env;
 - php artisan serve.


## PHP MVC

Seguindo os padrões de Programação Orientado a Objetos do PHP e da arquitetura MVC pré-disponibilizada pelo framework
foram criadas duas views, uma para o formulário e uma para a listagem. Ao realizar a pesquisa o formulário é enviado para
o Controller através das Routes definidade em routes/web.php. O resultado obtido com curl via api é encaminhado formatado
para a View onde os dados são dispostos em uma table paginada e configurada.


## JS

Seguindo os padrões de consumo de chamadas assincronas da função Fetch() do javascritp, uma página contendo todos os recursos
necessários foi criada. A section de formulário é disponibilizada, onde ao Pesquisar a chamada de API é realizada, e a promessa
retornada é disponibilizada na tabela.


## TECHNOLOGIES

Blade Components (Laravel Default);
HTML (Default, Required);
CSS (Default, Required);
JavaScript (Default, Required);
Bootstrap (Frontend);
Jquery (JS Treatment);
Datatables (Table Content);
Fontawesome (Icons);
Font Nunito (Laravel Default);
