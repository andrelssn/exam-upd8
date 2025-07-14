<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Editar Cliente</title>

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
                <h4>Editar Cliente</h4>

                <form method="POST" action="{{ route('sendEdit', $clientData->id) }}" class="form-consult">
                    @csrf
                    @method('PUT')
                    <div>
                        <div class="form-field">
                            <label for="cpf">CPF:</label>
                            <input value="{{$clientData->cpf}}" type="text" id="cpf" name="cpf" placeholder="089.518.000-67">
                        </div>

                        <div class="form-field">
                            <label for="name">Nome:</label>
                            <input value="{{$clientData->name}}" type="text" id="name" name="name">
                        </div>

                        <div class="form-field">
                            <label for="birthdate">Data Nascimento:</label>
                            <input value="{{ \Carbon\Carbon::parse($clientData->birthdate)->format('Y-m-d') }}" type="date" id="birthdate" name="birthdate">
                        </div>

                        <div class="form-field">
                            <label for="gender">Sexo:</label>

                            <div class="form-field">
                                <input {{ $clientData->gender === 'masculino' ? 'checked' : '' }} type="radio" id="masculino" name="gender" value="masculino" />
                                <label for="masculino">Masculino</label>
                            </div>

                            <div class="form-field">
                                <input {{ $clientData->gender === 'feminino' ? 'checked' : '' }} type="radio" id="feminino" name="gender" value="feminino" />
                                <label for="feminino">Feminino</label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="form-field">
                            <label for="address">Endereço:</label>
                            <input value="{{$clientData->address}}" type="text" id="address" name="address">
                        </div>

                        <div class="form-field">
                            <label for="state">Estado:</label>
                            <input value="{{$clientData->state}}" type="text" id="state" name="state">
                        </div>

                        <div class="form-field">
                            <label for="city">Cidade:</label>
                            <input value="{{$clientData->city}}" type="text" id="city" name="city">
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
