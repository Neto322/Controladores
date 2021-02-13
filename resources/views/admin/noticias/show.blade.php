<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$noticia->titulo}}</title>
</head>
<body>
    <a href="{{route("admin.noticias.index")}}">volver a la lista de noticias </a>
        <h1>{{$noticia->titulo}}</h1>
        <p> {{$noticia->fecha}} </p>
        <h4>{{$noticia->autor}}</h4>
        <img src="{{$noticia->foto}}">
        <p> {{$noticia->cuerpo}} </p>
</body>
</html>