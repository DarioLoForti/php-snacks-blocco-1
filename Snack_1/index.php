<?php

// definisco l'array della giornata di campionato, con squadre sfidanti e punteggio della partita
$matches = [
    [
        'home' => 'Dolomiti Energia Trentino',
        'guest' => 'Germani Brescia',
        'home_points' => 69,
        'guest_points' => 93
    ],
    [
        'home' => 'Estra Pistoia',
        'guest' => 'Givova Scafati Basket',
        'home_points' => 78,
        'guest_points' => 71
    ],
    [
        'home' => 'Happy Casa Brindisi',
        'guest' => 'Generazione Vincente Napoli Basket',
        'home_points' => 77,
        'guest_points' => 80
    ],
    [
        'home' => 'Openjobmetis Varese',
        'guest' => 'Virtus segafredo Bologna',
        'home_points' => 69,
        'guest_points' => 81
    ],
    [
        'home' => 'Bertram derthona Tortona',
        'guest' => 'Umana Reyer venezia',
        'home_points' => 75,
        'guest_points' => 69
    ],
    [
        'home' => 'Unahotels Reggio Emilia',
        'guest' => 'Vanoli Basket Cremona',
        'home_points' => 78,
        'guest_points' => 71
    ],
    [
        'home' => 'Carpegna Prosciutto Pesaro',
        'guest' => 'EA7 Emporio Armani Milano',
        'home_points' => 65,
        'guest_points' => 85
    ],
    [
        'home' => 'NutriBullet Treviso Basket',
        'guest' => 'Banco di Sardegna Sassari',
        'home_points' => 77,
        'guest_points' => 70
    ],
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-blocco-1</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-white fw-bold pt-3">LBA Serie A giornata 17°:</h1>
                </div>
                <?php foreach ($matches as $match) {  ?>
                    <div class="col-6 py-5">
                        <div class="container-match">
                            <h3 class=" text-center "><?php echo $match['home']." - "."vs"." - ".$match['guest'];  ?></h3>
                            <h5 class="text-center py-1"> Finale: </h5>
                            <h6 class="text-center"><?php echo $match['home_points']." - ".$match['guest_points'];  ?></h6>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>
