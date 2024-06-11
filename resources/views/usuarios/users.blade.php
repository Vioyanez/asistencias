<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola usuario</h1>
    <!-- generar una lista de 10 usuarios-->
    @foreach ($users as $user)
        <div>
            <h3>
                {{$user->nombre}}
            </h3>
            <br>
            <p>
                {{$user->correo}}
            </p>
        </div>
    @endforeach
</body>
</html>