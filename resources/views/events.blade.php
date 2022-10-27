<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wydarzenia</title>
    @vite(['resources/css/app.css'])
</head>

<?php
$all->find($eventId);
?>

<body class="text-center">
    <div>
        Nr wydarzenia to {{ $eventId }}
    </div>

    <div>
        <p> Autor to  {{ $all->value('author') }} </p>
        <img class="mx-auto rounded-3xl h-64 border-2" src="{{ $all->value('thumbnailURL') }}"></img>
    </div>
</body>

</html>
