<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado análise IMC</title>
</head>
<body>
    <main>
        <h1>Resultado análise IMC</h1>
        <div>
            <h2>{{$resultadoimc["nome"]}}</h2>
            <p>Idade: {{$resultadoimc["idade"]}}</p>
            <p>Peso: {{$resultadoimc["peso"]}}</p>
            <p>Altura: {{$resultadoimc["altura"]}}</p>
            <p>IMC: {{$resultadoimc["imc"]}} - {{$resultadoimc["classificacaoimc"]}}</p>
        </div>
        <a href="{{url('/')}}">Voltar</a>
    </main>
</body>
</html>
