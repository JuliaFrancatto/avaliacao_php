<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Matéria</title>
</head>
<body>
<form action="/criar_materia" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">

        <label for="professor">CPF</label>
        <input type="text" name="professor">

        <input type="submit" value="Salvar">
    </form>
</body>
</html>