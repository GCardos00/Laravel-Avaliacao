<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>

<body>
    <h1>Cadastrar</h1>

    <form action="/atualizacao-pessoa/{{ $cadastro-> id }}" method="POST">
        @csrf
        <label for="lblNome">Nome:</label>
        <input type="text" name="nome" value="{{ $cadastro->nome }}">
        <br><br>
        <label for="lblEndereco">Endereco:</label>
        <input type="text" name="endereco" value="{{ $cadastro->endereco }}">
        <br><br>
        <label for="lblBairro">Bairro:</label>
        <input type="text" name="bairro" value="{{ $cadastro->bairro }}">
        <br><br>
        <label for="lblCep">Cep:</label>
        <input type="text" name="cep" value="{{ $cadastro->cep }}">
        <br><br>
        <label for="lblCidade">Cidade:</label>
        <input type="text" name="cidade" value="{{ $cadastro->cidade }}">
        <br><br>
        <label for="lblEstado">Estado:</label>
        <input type="text" name="estado" value="{{ $cadastro->estado }}">
        <br><br>
        <button>Atualizar:</button>
    </form>
    


</body>

</html>