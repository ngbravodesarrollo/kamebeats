<!DOCTYPE html>
<html>
    <head>
        <title>Kamebeats</title>        
        <link rel="stylesheet" href="../assets/css/all.min.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
    </head>
    <body class="container">
        <header class="row">
            <div class="col-3"></div>
           
            <div class="col-6 align-sefl-center">
                <h1>Kamebeats Sound</h1>
            </div>
            <div class="col-3 align-self-end">
                <p>Hola <?=$_SESSION["username"] ?></p>
                <div>
                <i class="fas fa-user">Perfil</i>
                </div>
            </div>
        </header>
        <?php include '../html/'. get_class($this) .'.php'; ?>
    </body>
</html>