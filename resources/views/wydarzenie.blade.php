<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wydarzenia</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    Nr wydarzenia to {{ $eventId }}


    if id ($eventID)
    @foreach ($all as $guy_infive)
        @if ($id == $eventID)
            <div class="text-center text-neutral-800 p-1 rounded-3xl">
                {{ $guy_infive->submitted_by }} {{ $guy_infive->author }}
            </div>
            @elseif
        @endforeach
</body>

</html>
