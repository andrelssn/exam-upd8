## Projeto :upd8

Este projeto foi desenvolvido a pedido da empresa :upd8, para realização do teste presente no processo seletivo.

## Instruções para poder rodar o projeto
- Tenha instalado o Composer em sua máquina, pois será necessário para instalação das dependências do laravel e outras funcionalidades.
- Dentro da raiz do sistema tem uma pasta chamada `DDL`, no qual contém o DDL do query para criar o Banco do projeto. (MySQL)

## Como rodar o projeto

1. Clone o projeto em sua máquina, e abra na IDE de sua preferencia.
2. Rode o comando `composer install` para instalar todas as dependências necessárias para o laravel.
3. Renomeie o arquivo `.env.example` para `.env`, certifique-se de conferir as configurações para rodar em ambiente local.
4. Rode o comando `php artisan migrate` para criar todas as tabelas necessárias para o sistema.
5. Rode o comando `php artisan db:seed` para popular as tabelas.
6. Agora rode o `php artisan serve`, e seu sistema está pronto para ser utilizado!

### ENJOY !
