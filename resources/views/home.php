<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <a href="">
            <?php foreach ($lista as $czlowiek) :
                echo $czlowiek['imie'] . " | wiek-> "
                . $czlowiek['wiek'] . "<br>";
            endforeach;
            ?></a>
    </h1>
</body>

</html>