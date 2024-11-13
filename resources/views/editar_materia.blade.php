<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar Materia</title>
  <link rel="stylesheet" href="/css/Cadastro.css">
</head>
<body>
  <form class="cadastro" action="/editar_materia/{{$materia->id}}" method="post">
    @csrf
    {{ method_field("PUT") }}
    <label for="name">Nome</label>
    <input type="text" name="name" value="{{$materia->name}}">

    <label for="professor">Professor</label>
    <input type="text" name="professor" value="{{$materia->professor}}">

    <input type="submit" value="Alterar">
</form>
</body>
</html>