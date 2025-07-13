
<?php
    // Captura o valor enviado via POST
    $nome = $_POST['name'] ?? 'Nome não informado';

    $pages = [];
    for ($i = 1; $i <= $lastPage; $i++) {
        $pages[] = $i;
    }

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Consulta Cliente</title>

        <link rel="stylesheet" href="../css/styles.css">
    </head>

    <body>
        <header>
           head
        </header>

        <div class="container">
            <div class="consult-container">
                <h4>Consulta Cliente</h4>

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

                        <button type="submit">Pesquisar</button>
                        <button type="submit">Limpar</button>
                    </div>
                </form>
            </div>

            <br/><br/>

            <div class="result-container">
                <h4>Resultado da Pesquisa</h4>

                <table class="table-container">
                    <tr class="table-tr">
                        <th></th>
                        <th></th>
                        <th>Cliente</th>
                        <th>CPF</th>
                        <th>Data Nasc.</th>
                        <th>Estado</th>
                        <th>Cidade</th>
                        <th>Sexo</th>
                    </tr>
                    <?php foreach ($clients as $client): ?>
                        <tr class="table-tr">
                            <td>
                                <button class="edit-btn">
                                    Editar
                                </button>
                            </td>
                            <td>
                                <button class="delete-btn">
                                    Excluir
                                </button>
                            </td>
                            <td><?= $client->name ?></td>
                            <td><?= $client->cpf ?></td>
                            <td><?= $client->birthdate ?></td>
                            <td><?= $client->state ?></td>
                            <td><?= $client->city ?></td>
                            <td><?= $client->gender ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>

                <form action="" method="get">
                    <div class="pagination">
                        <?php foreach ($pages as $page): ?>
                            <?php if ($page === $currentPage): ?>
                                <button type="button" class="pagination-btn-current" disabled>
                                    <?= $page ?>
                                </button>
                            <?php else: ?>
                                <button type="submit" name="page" value="<?= $page ?>" class="pagination-btn">
                                    <?= $page ?>
                                </button>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </form>
            </div>

        </div>
    </body>
</html>
