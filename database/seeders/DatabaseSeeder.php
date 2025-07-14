<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            ['cpf' => '123.456.789-00', 'name' => 'Luiz Fernando Ribeiro', 'birthdate' => '1998/06/21', 'gender' => 'masculino', 'address' => 'Rua das Oliveiras, 101', 'state' => 'São Paulo', 'city' => 'Campinas'],
            ['cpf' => '234.567.890-12', 'name' => 'Amanda Martins Silva', 'birthdate' => '1987/10/12', 'gender' => 'feminino', 'address' => 'Av. Brasil, 2020', 'state' => 'São Paulo', 'city' => 'Jundiaí'],
            ['cpf' => '345.678.901-23', 'name' => 'Carlos Eduardo Freitas', 'birthdate' => '1992/03/04', 'gender' => 'masculino', 'address' => 'Rua do Sol Nascente, 305', 'state' => 'São Paulo', 'city' => 'Sorocaba'],
            ['cpf' => '456.789.012-34', 'name' => 'Juliana Rocha Mendes', 'birthdate' => '1995/11/23', 'gender' => 'feminino', 'address' => 'Travessa do Amor Perfeito, 45', 'state' => 'São Paulo', 'city' => 'Piracicaba'],
            ['cpf' => '567.890.123-45', 'name' => 'Marcos Paulo Andrade', 'birthdate' => '1990/08/15', 'gender' => 'masculino', 'address' => 'Rua dos Girassóis, 778', 'state' => 'São Paulo', 'city' => 'São Carlos'],
            ['cpf' => '678.901.234-56', 'name' => 'Fernanda Lima Barreto', 'birthdate' => '1983/12/30', 'gender' => 'feminino', 'address' => 'Av. das Palmeiras, 900', 'state' => 'São Paulo', 'city' => 'Taubaté'],
            ['cpf' => '789.012.345-67', 'name' => 'Ricardo Henrique Torres', 'birthdate' => '1997/04/09', 'gender' => 'masculino', 'address' => 'Rua dos Sonhos, 112', 'state' => 'São Paulo', 'city' => 'Barretos'],
            ['cpf' => '890.123.456-78', 'name' => 'Patrícia Gomes Nogueira', 'birthdate' => '2001/05/28', 'gender' => 'feminino', 'address' => 'Alameda das Acácias, 88', 'state' => 'São Paulo', 'city' => 'Itu'],
            ['cpf' => '901.234.567-89', 'name' => 'Thiago Azevedo Fernandes', 'birthdate' => '1989/09/14', 'gender' => 'masculino', 'address' => 'Rua do Horizonte Azul, 73', 'state' => 'São Paulo', 'city' => 'Bragança Paulista'],
            ['cpf' => '012.345.678-90', 'name' => 'Larissa Barbosa Cunha', 'birthdate' => '1996/02/02', 'gender' => 'feminino', 'address' => 'Travessa do Encanto, 7', 'state' => 'São Paulo', 'city' => 'São Vicente'],
            ['cpf' => '103.204.305-01', 'name' => 'Gabriel Monteiro Dias', 'birthdate' => '1984/07/17', 'gender' => 'masculino', 'address' => 'Rua Pedra da Lua, 56', 'state' => 'São Paulo', 'city' => 'Franca'],
            ['cpf' => '214.305.406-12', 'name' => 'Isabela Pires Faria', 'birthdate' => '1991/01/19', 'gender' => 'feminino', 'address' => 'Rua do Luar Tropical, 321', 'state' => 'São Paulo', 'city' => 'Ribeirão Preto'],
            ['cpf' => '325.406.507-23', 'name' => 'Diego Almeida Lopes', 'birthdate' => '1986/03/11', 'gender' => 'masculino', 'address' => 'Rua Orion, 99', 'state' => 'São Paulo', 'city' => 'Suzano'],
            ['cpf' => '436.507.608-34', 'name' => 'Tatiane Souza Prado', 'birthdate' => '1999/12/08', 'gender' => 'feminino', 'address' => 'Av. da Luz Serena, 1000', 'state' => 'São Paulo', 'city' => 'Mogi das Cruzes'],
            ['cpf' => '547.608.709-45', 'name' => 'Eduardo Batista Serra', 'birthdate' => '1993/05/03', 'gender' => 'masculino', 'address' => 'Rua Canela Branca, 20', 'state' => 'São Paulo', 'city' => 'Marília'],
            ['cpf' => '658.709.810-56', 'name' => 'Aline Cavalcanti Reis', 'birthdate' => '1988/09/30', 'gender' => 'feminino', 'address' => 'Rua Mirante Estelar, 157', 'state' => 'São Paulo', 'city' => 'Presidente Prudente'],
            ['cpf' => '769.810.921-67', 'name' => 'Bruno Nascimento Teixeira', 'birthdate' => '1994/06/25', 'gender' => 'masculino', 'address' => 'Rua Estrela da Tarde, 874', 'state' => 'São Paulo', 'city' => 'Araçatuba'],
            ['cpf' => '870.921.032-78', 'name' => 'Camila Oliveira Diniz', 'birthdate' => '1990/11/07', 'gender' => 'feminino', 'address' => 'Av. dos Oceanos, 33', 'state' => 'São Paulo', 'city' => 'Diadema'],
            ['cpf' => '981.032.143-89', 'name' => 'Renato Cardoso Braga', 'birthdate' => '1985/02/14', 'gender' => 'masculino', 'address' => 'Rua da Aurora, 444', 'state' => 'São Paulo', 'city' => 'São Bernardo do Campo'],
            ['cpf' => '092.143.254-90', 'name' => 'Vanessa Ferreira Pinto', 'birthdate' => '1998/08/08', 'gender' => 'feminino', 'address' => 'Rua Nebulosa Vermelha, 19', 'state' => 'São Paulo', 'city' => 'Osasco'],
        ]);

        DB::table('representatives')->insert([
            ['name' => 'Veronica Ferreira Pinto', 'state' => 'São Paulo', 'city' => 'Campinas'],
            ['name' => 'Lucas Mendes Oliveira', 'state' => 'São Paulo', 'city' => 'Santos'],
            ['name' => 'Juliana Silva Costa', 'state' => 'São Paulo', 'city' => 'Sorocaba'],
            ['name' => 'Carlos Eduardo Lima', 'state' => 'São Paulo', 'city' => 'São José dos Campos'],
            ['name' => 'Mariana Rocha Almeida', 'state' => 'São Paulo', 'city' => 'Ribeirão Preto'],
            ['name' => 'Felipe Souza Martins', 'state' => 'São Paulo', 'city' => 'Santos'],
            ['name' => 'Ana Paula Nogueira', 'state' => 'São Paulo', 'city' => 'Campinas'],
            ['name' => 'Gabriel Costa Ramos', 'state' => 'São Paulo', 'city' => 'São Bernardo do Campo'],
            ['name' => 'Tatiane Oliveira Prado', 'state' => 'São Paulo', 'city' => 'Guarulhos'],
            ['name' => 'Renato Lopes Teixeira', 'state' => 'São Paulo', 'city' => 'Barueri'],
            ['name' => 'Fernanda Lima Duarte', 'state' => 'São Paulo', 'city' => 'São José dos Campos'],
            ['name' => 'Rafael Pires Sampaio', 'state' => 'São Paulo', 'city' => 'Piracicaba'],
            ['name' => 'Carla Regina Barbosa', 'state' => 'São Paulo', 'city' => 'Santo André'],
            ['name' => 'Leandro Moreira Souza', 'state' => 'São Paulo', 'city' => 'Bauru'],
            ['name' => 'Priscila Andrade Freitas', 'state' => 'São Paulo', 'city' => 'Sorocaba'],
            ['name' => 'Eduardo Henrique Silva', 'state' => 'São Paulo', 'city' => 'Campinas'],
            ['name' => 'Bruna Cristina Ramos', 'state' => 'São Paulo', 'city' => 'Jundiaí'],
            ['name' => 'Thiago Lopes Fernandes', 'state' => 'São Paulo', 'city' => 'Guarulhos'],
            ['name' => 'Patrícia Gomes da Luz', 'state' => 'São Paulo', 'city' => 'São Bernardo do Campo'],
            ['name' => 'Rodrigo Neves Moreira', 'state' => 'São Paulo', 'city' => 'São José do Rio Preto'],
            ['name' => 'Letícia Alves Corrêa', 'state' => 'São Paulo', 'city' => 'Osasco'],
            ['name' => 'Fábio Henrique Dias', 'state' => 'São Paulo', 'city' => 'Mogi das Cruzes'],
            ['name' => 'Aline Martins Batista', 'state' => 'São Paulo', 'city' => 'Diadema'],
            ['name' => 'Vinícius de Oliveira', 'state' => 'São Paulo', 'city' => 'Franca'],
            ['name' => 'Camila Ribeiro Santana', 'state' => 'São Paulo', 'city' => 'Barretos'],
            ['name' => 'João Pedro Carvalho', 'state' => 'São Paulo', 'city' => 'Ribeirão Preto'],
            ['name' => 'Daniela Souza Pinto', 'state' => 'São Paulo', 'city' => 'Jundiaí'],
            ['name' => 'Marcelo Henrique Gomes', 'state' => 'São Paulo', 'city' => 'Piracicaba'],
            ['name' => 'Nathalia Moraes Vieira', 'state' => 'São Paulo', 'city' => 'Santo André'],
            ['name' => 'André Luiz Cardoso', 'state' => 'São Paulo', 'city' => 'São José do Rio Preto'],
        ]);
    }
}
