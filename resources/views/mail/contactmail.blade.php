<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Benvenuto {{$contact['user']}}su DrTrecchio</h1>

    <ul>
        <li>Nome Utente: {{$contact['user']}}</li>
        <li>Messaggio: {{$contact['message']}}</li>
    </ul>
</body>
</html>

