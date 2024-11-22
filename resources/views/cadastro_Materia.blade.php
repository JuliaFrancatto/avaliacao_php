<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Matéria</title>
    <link rel="stylesheet" href="/css/Cadastro.css">
</head>
<body>
<form class="cadastro" action="/criar_materia" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name" required>

        <label for="professor">Professor</label>
        <select name="professor" id="professor" required>
            <option value="">Selecione um professor</option>
            @foreach($professores as $professor)
                <option value="{{ $professor->id }}">{{ $professor->name }}</option>
            @endforeach
        </select>

        <input type="submit" value="Salvar">

        <a href="/" class="btn-back">Voltar para a Página Inicial</a>

    </form>
</body>
</html>
