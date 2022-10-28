<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wydarzenia</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<?php
$all->find($eventId);
// DB::table('student_details')->insert($data);
?>

<body class="text-center">
    <div>
        Nr wydarzenia to {{ $eventId }}
    </div>

    <div>
        <p> Autor to {{ $all->value('author') }} </p>
        <img class="mx-auto rounded-3xl h-64 border-2" src="{{ $all->value('thumbnailURL') }}"></img>
    </div>

    <div class="flex justify-center">
        <div class="mt-10 border-2 rounded-full">
            <form method="post">

                <input
                    class="w-1/5 text-center p-5 border-2 hover:bg-inherit focus:outline-none bg-neutral-900 rounded-full"
                    type="text" placeholder="Name"></input>

                <input
                    class="w-3/5 p-5 border-2 text-center hover:bg-inherit focus:outline-none bg-neutral-900 rounded-full"
                    type="text" placeholder="Comment Text"></input>

                <button class=" p-5 hover:text-white ml-2 text-neutral-900 bg-white rounded-full">Add</button>

            </form>
        </div>
    </div>

</body>

</html>
