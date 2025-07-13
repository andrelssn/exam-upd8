
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
                        <div class="select-input">
                            <label>Estado</a>
                            <select name="state">
                                <option value="<?= null ?>">nenhuma</option>

                                <?php foreach ($stateList as $key => $state) : ?>
                                    <option value="<?= $state->state ?>">
                                        <?= $state->state ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="select-input">
                            <label>Cidade</a>
                            <select name="city">
                                <option value="<?= null ?>">nenhuma</option>

                                <?php foreach ($cityList as $key => $city) : ?>
                                    <option value="<?= $city->city ?>">
                                        <?= $city->city ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="buttons-container">
                            <button type="submit" class="search-btn">Pesquisar</button>

                            <a href="/">
                                <button type="button" class="clear-btn">Limpar</button>
                            </a>
                        </div>
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
                    <!-- Mantem os filtros atuais -->
                    <?php foreach ($_GET as $key => $value): ?>
                        <?php if ($key !== 'page'): // não duplicar o parâmetro 'page' ?>
                            <input type="hidden" name="<?= htmlspecialchars($key) ?>" value="<?= htmlspecialchars($value) ?>">
                        <?php endif; ?>
                    <?php endforeach; ?>

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
