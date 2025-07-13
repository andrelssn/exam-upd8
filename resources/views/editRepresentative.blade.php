<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Editar Representante</title>

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
                <a href="/representatives/city">
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
                <h4>Editar Representante</h4>

                <form method="POST" action="{{ route('sendEditRepresentative', $user->id) }}" class="form-consult">
                    @csrf
                    @method('PUT')
                    <div>
                        <div class="form-field">
                            <label for="name">Nome:</label>
                            <input value="{{$user->name}}" type="text" id="name" name="name">
                        </div>

                        <div class="form-field">
                            <label for="state">Estado:</label>
                            <input value="{{$user->state}}" type="text" id="state" name="state">
                        </div>

                        <div class="form-field">
                            <label for="city">Cidade:</label>
                            <input value="{{$user->city}}" type="text" id="city" name="city">
                        </div>

                        <div class="buttons-container">
                            <button type="submit" class="search-btn">Salvar</button>
                        </div>
                    </div>
                </form>

                @if (session('success'))
                    <div class="alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('fail'))
                    <div class="alert-danger">{{ session('fail') }}</div>
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
