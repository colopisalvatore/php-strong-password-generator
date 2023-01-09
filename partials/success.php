<?php
session_start();
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/style.css">
        <title>Success!</title>
    </head>
    <body>
        <div class="container">
            <?php if( $_SESSION['password'] ): ?>
            <h4>Complimenti la tua password è stata generata con successo!!</h4>
            <div class="success">
                <div class="alert alert-success w-25">
                    <?php echo $_SESSION['password']; ?>
                </div>
            </div>
            <?php endif; ?> 
        </div>
    </body>
</html>