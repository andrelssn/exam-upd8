
<?php
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

        <title>Representantes por cidade</title>

        <link rel="stylesheet" href="../css/styles.css">
    </head>

    <body>
        <div class="container">
            <div class="top-side-buttons">
                <a href="/">
                    <button>
                        Consultar Clientes
                    </button>
                </a>
                <a href="/register">
                    <button>
                        Cadastrar Cliente
                    </button>
                </a>
                <a class="top-side-buttons-current">
                    <button>
                        Representantes (cidade)
                    </button>
                </a>
                <a href="/representatives/client">
                    <button>
                        Representantes (cliente)
                    </button>
                </a>
                <a href="/representatives/management">
                    <button>
                        Gerenciar Representantes
                    </button>
                </a>
            </div>

            <div class="consult-container">
                <h4>Consulta por Cidade</h4>

                <form method="get" class="form-consult">
                    <div>
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

                            <a href="/representatives/city">
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
                        <th>Representante</th>
                        <th>Estado</th>
                        <th>Cidade</th>
                    </tr>
                    <?php foreach ($list as $value): ?>
                        <tr class="table-tr">
                            <td><?= $value->name ?></td>
                            <td><?= $value->state ?></td>
                            <td><?= $value->city ?></td>
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

                @if (session('success'))
                    <div class="alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert-danger">
                        <ul>
                            @foreach ($errors->all() as $erro)
                                <li>{{ $erro }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

        </div>
    </body>
</html>
