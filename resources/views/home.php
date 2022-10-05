<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (count($ludzie) == 0) {
        echo "nie ma nic w liscie";
    } elseif (count($ludzie) == 1) {
        echo "są 1 dane w liście";
        foreach ($ludzie as $czlowiek) : {
                echo $czlowiek["imie"];
            }
        endforeach;
    } elseif (count($ludzie) == 2) {
        echo "są 2 dane w liście i brzmią tak :" . "<br>";
        foreach ($ludzie as $czlowiek) : {
                echo $czlowiek["imie"]
                    . "<br>" .
                    $czlowiek["wiek"]
                    . "<br>" .
                    $czlowiek["opis"]
                    . "<br>";
            }
        endforeach;
    } elseif (count($ludzie) == 3) {
        echo "są 3 dane w liście";
    }
    ?>
</body>

</html>