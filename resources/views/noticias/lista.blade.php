<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Noticias</h1>
    @foreach($noticias as $noticia)
        
        
        <h3><a href="{{route("noticias.detalles", $noticia->id)}}"> {{ $noticia->titulo}} </h3>
        </a>
        <h2> {{$noticia->fecha }} </h2>
        <p>{{$noticia->autor}}</p>
        
    @endforeach
</body>
</html>