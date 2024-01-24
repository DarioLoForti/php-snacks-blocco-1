<?php

if (isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['eta'])) {

    if (strlen($_GET['nome']) > 3 && str_contains($_GET['email'], '.') && str_contains($_GET['email'], '@')  && is_numeric($_GET['eta'])) {
        
        $accesso = 'accesso riuscito';
    }else{
        
        $accesso = 'accesso negato';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>php-snacks-blocco-2</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Inserire Dati</h1>
            </div>
            <div class="col-12">
                <form action="index.php" method="GET">
                    <div class="row">
                        <div class="col-4 py-5">
                            <label for="control-label">Nome</label>
                            <input type="text" id="nome" class="form-control" name="nome" placeholder="inserisci nome" >
                        </div>
                        <div class="col-4 py-5">
                        <label for="control-label">Email</label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="inserisci la tua email" >
                        </div>
                        <div class="col-4 py-5">
                        <label for="control-label">Età</label>
                            <input type="text" id="eta" class="form-control" name="eta" placeholder="inserisci la tua età" >
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-success">Invia</button>
                        </div>
                    </form>
                        <div class="col-12 py-5">
                            <?php if (isset($accesso)) {
                                if($accesso == 'accesso riuscito'){
                                ?> <h5 > <?php echo $accesso; ?> </h5> <?php
                                }else{
                                ?> <h5> <?php echo $accesso; ?> </h5> <?php
                                }
                            } ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>