<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registrar Cliente</title>

        <link rel="stylesheet" href="../css/styles.css">
    </head>

    <body >
        <header>
           head
        </header>

        <div class="container">
            <main>
                <h3>Cadastro Cliente</h3>

                <div>
                    <form action="{{ route('cliente.enviar') }}" method="POST">
                        <div>
                            <label for="cpf">CPF:</label>
                            <input type="text" id="cpf" name="cpf" placeholder="089.518.000-67">
                        </div>

                        <div>
                            <label for="name">Nome:</label>
                            <input type="text" id="name" name="name">
                        </div>

                        <div>
                            <label for="birth">Data Nascimento:</label>
                            <input type="date" id="birth" name="birth">
                        </div>

                        <div>
                            <label for="gender">Sexo:</label>

                            <div>
                                <input type="radio" id="masculino" name="gender" value="masculino" />
                                <label for="masculino">Masculino</label>
                            </div>

                            <div>
                                <input type="radio" id="feminino" name="gender" value="feminino" />
                                <label for="feminino">Feminino</label>
                            </div>
                        </div>

                        <div>
                            <label for="name">Endereço:</label>
                            <input type="text" id="name" name="name">
                        </div>

                        <div>
                            <label>Estado</a>
                            <select name="state">
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                            </select>
                        </div>

                        <div>
                            <label>Cidade</a>
                            <select name="city">
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                            </select>
                        </div>

                        <button type="submit">Salvar</button>
                        <button type="submit">Limpar</button>
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>

<?php
    // Captura o valor enviado via POST
    $nome = $_POST['name'] ?? 'Nome não informado';



    echo "Olá, $nome!";
?>
