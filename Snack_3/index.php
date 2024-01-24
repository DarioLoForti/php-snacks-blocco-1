<?php
// definisco array di post
$posts = [

    '20/01/2024' => [
        [
            'fonte' => 'Corriere della Sera',
            'titolo' => 'Biden, gelo con Netanyahu',
            'autore' => 'Monica Colombo',
            'testo' => 'Telefonata di 40 minuti: "Servono due Stati". Lite nel governo di Israele'
        ],
        [
            'fonte' => 'La repubblica',
            'titolo' => 'Italia in vendita',
            'autore' => 'Eugenio Lupo',
            'testo' => "Il governo punta a fare cassa vendendo quote dell'azienda di Stato: Eni, Poste, Mps, Ferrovie. Obiettivo 20 miliardi"
        ],
    ],
    '21/01/2024' => [
        [
            'fonte' => 'La Stampa',
            'titolo' => 'Israele-Iran, scontro totale. ',
            'autore' => 'Riccardo Rospetti',
            'testo' => 'Onu e Usa in pressing su Bibi'
        ],
        [
            'fonte' => 'Gazzetta dello Sport',
            'titolo' => 'Il coraggio del Diavolo ',
            'autore' => 'Giuseppe Bianchini',
            'testo' => 'Cori razzisti: Maignan se ne va, il Milan vince al 93.'
        ]
    ],
    '22/01/2024' => [
        [
            'fonte' => 'Sky Tg24',
            'titolo' => 'Guerra Ucraina-Russia. Tusk a Kiev: aiuti da Polonia, conflitto è lotta bene-male',
            'autore' => 'Pietro Tremoli',
            'testo' => "La Polonia fornirà un nuovo pachetto di aiuti all'Ucraina. Lo ha annunciato il presidente ucraino Zelensky incontrando a Kiev il premier polacco Donald Tusk."
        ],
        [
            'fonte' => 'Corriere della Sera',
            'titolo' => "Mar Rosso, l'Italia si schiera.",
            'autore' => 'Monica Colombo',
            'testo' => '"Missione difensiva" con Francia e Germania. Netanyahu sotto assedio anche a casa'
        ]        
    ]
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>php-snacks-blocco-3</title>
</head>
<body>
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="my-4 text-white">News</h1>
                </div>
                <?php foreach ($posts as $key => $post) { ?>
                    <h2 class="my-5 text-white">News del: <?php echo $key ?></h2>
    
                    <?php foreach ($post as $news_post) {  ?>
                            <div class="col-6">
                                <div class="container-post">
                                    <h5 class=" py-2">Fonte: <?php echo $news_post['fonte']; ?> </h5>
                                    <h3 class=" text-center py-2  "><?php echo $news_post['titolo'];  ?></h3>
                                    <h6 class=" text-center py-2"><?php echo $news_post['testo'];  ?></h6>
                                    <h6 class="text-end py-2">Autore: <?php echo $news_post['autore'];  ?></h6>
                                </div>
                            </div>
                        <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>