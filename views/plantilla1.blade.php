<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plantilla 1</title>
</head>
<body>
  <h1>{{$titulo}}</h1>
  <p>{{time()}}</p>
  <p>{{$nombre}}</p>
  <p>{{$edad}} años</p>
  @if ($edad >=18)
    <p>Contenido para adultos</p>
  @else
    <p>Viva Bob Esponja</p>
  @endif
  <ul>
  @for ($i = 0; $i < $maximo; $i++)
    <li>Elemento {{$i}}</li>    
  @endfor
  </ul>
  <ol>
    @foreach ($aficiones as $aficion)
        <li>{{$aficion}}</li>
    @endforeach
    @empty($aficiones)
            <li>No hay aficiones</li>
    @endempty
  </ol>
  <ol>
    @forelse ($aficiones as $aficion)
        <li>{{$aficion}}--</li>
    @empty
        <li>No hay aficiones</li>
    @endforelse
  </ol>
</body>
</html>