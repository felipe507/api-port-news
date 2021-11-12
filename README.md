# Projeto Teste Api Porto Notícias 

## Informções

- Linguagem - PHP

- Framework - Laravel 8.68.1

## Descrição

O projeto realiza uma requisição com PHP ao site G1 (https://g1.globo.com/sp/santos-regiao/porto-mar/) trazendo as informações das notícias 

## Comandos para rodar o projeto

Instalar Dependências

- composer install
- composer update

Execultar todas as migrações para banco de dados (usuário, carros)

- php artisan migrate 

Rodar servidor 

- php artisan serve

## Dependências projeto utilizadas no Web Scrapping
    ```
        Browser-kit - "symfony/browser-kit": "^5.3",
        Crawler - "symfony/dom-crawler": "^5.3",
        Http-client - "symfony/http-client": "^5.3"
    ```

## License
47
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

