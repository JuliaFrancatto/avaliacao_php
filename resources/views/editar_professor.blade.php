<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar Professor</title>
</head>
<body>
  <form action="/editar_professor/{{$professor->id}}" method="post">
    @csrf
    {{ method_field("PUT") }}
    <label for="name">Nome</label>
    <input type="text" name="name" value="{{$professor->name}}">

    <label for="cpf">CPF</label>
    <input type="text" name="cpf" value="{{$professor->cpf}}">

    <label for="email">Email</label>
    <input type="text" name="email" value="{{$professor->email}}">

    <input type="submit" value="Salvar">
</form>
</body>
</html>