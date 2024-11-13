<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lista</title>
</head>
<body> 
  @if(empty($professores) || count($professores) == 0)
    <h3>Nenhum cadastro</h3>      
  @else
  <table border="1">
    <tr>
      <th>Nome</th>
      <th>CPF</th>
      <th>Email</th>
      <th>Ações</th>
    </tr>
    @foreach ($professores as $professor)
        <tr>
          <td>{{$professor->name}}</td>
          <td>{{$professor->cpf}}</td>
          <td>{{$professor->email}}</td>
          <td>
            <form method="POST" action="/deletar_professor/{{$professor->id}}">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="delete">
            </form>

            <a href="/editar_professor/{{$professor->id}}">Editar</a>
          </td>
        </tr>
    @endforeach
  </table>       
  @endif

</body>
</html>