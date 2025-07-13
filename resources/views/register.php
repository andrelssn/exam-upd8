
<?php
    // Captura o valor enviado via POST
    $nome = $_POST['name'] ?? 'Nome não informado';

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registrar Cliente</title>

        <link rel="stylesheet" href="../css/styles.css">
    </head>

    <body>
        <div class="container">
            <div class="top-side-buttons">
                <a href="/">
                    <button>
                        Consultar
                    </button>
                </a>
                <a href="/register">
                    <button>
                        Cadastrar
                    </button>
                </a>
            </div>

            <div class="consult-container">
                <h4>Cadastrar Cliente</h4>

                <form method="get" class="form-consult">
                    <div>
                        <div class="form-field">
                            <label for="cpf">CPF:</label>
                            <input type="text" id="cpf" name="cpf" placeholder="089.518.000-67">
                        </div>

                        <div class="form-field">
                            <label for="name">Nome:</label>
                            <input type="text" id="name" name="name">
                        </div>

                        <div class="form-field">
                            <label for="birth">Data Nascimento:</label>
                            <input type="date" id="birth" name="birth">
                        </div>

                        <div class="form-field">
                            <label for="gender">Sexo:</label>

                            <div class="form-field">
                                <input type="radio" id="masculino" name="gender" value="masculino" />
                                <label for="masculino">Masculino</label>
                            </div>

                            <div class="form-field">
                                <input type="radio" id="feminino" name="gender" value="feminino" />
                                <label for="feminino">Feminino</label>
                            </div>
                        </div>
                    </div>

                    <div>

                        <div class="buttons-container">
                            <button type="submit" class="search-btn">Pesquisar</button>

                            <a href="/">
                                <button type="button" class="clear-btn">Limpar</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
