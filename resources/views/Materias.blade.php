<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lista de Matérias</title>
  <link rel="stylesheet" href="/css/Lista.css">
</head>
<body> 
  @if(empty($materias) || count($materias) == 0)
    <h3>Nenhum cadastro encontrado</h3>      
  @else
  <table border="1">
    <tr>
      <th>Nome</th>
      <th>Professor</th>
      <th>Ações</th>
    </tr>
    @foreach ($materias as $materia)
        <tr>
          <td>{{$materia->name}}</td>
          <td>{{$materia->professor}}</td>
          <td>
            <form method="POST" action="/deletar_materia/{{$materia->id}}" style="display:inline-block;">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="delete" class="btn-delete">
            </form>

            <a href="/editar_materia/{{$materia->id}}" class="btn-edit">Editar</a>
          </td>
        </tr>
    @endforeach
  </table>       
  @endif

</body>
</html>
