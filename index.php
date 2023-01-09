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
        <link rel="stylesheet" href="./css/style.css">
        <title>PHP Strong Password Generator</title>
    </head>
    <body>
        <div class="container">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura! </h2>
            <div class="card m-auto mt-5" style="width: 18rem;">
                <img class="card-img-top" src="./image/passgen.jpg" alt="Card image cap">
                <div class="card-body">
                    <form class="mb-3" action="./partials/pw_generator.php" method="GET">
                    <div class="mb-3">
                        <label for="password-length" class="form-label">Scegli la Lunghezza della Password</label>
                        <input type="number" class="form-control" id="password-length" name="length" value="<?php echo $_GET['length'] ?>" min="8" max="32" required>
                    </div>
                <button type="submit" class="btn btn-primary ">Genera</button>
            </form>
                </div>
                </div>
            
        </div>
        <?php if( $_SESSION['error'] ): ?>
        <div class="toast show align-items-center text-bg-danger position-fixed top-0 end-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <?php echo $_SESSION['error']; ?>
                </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        <?php endif; ?>
    </body>
</html>