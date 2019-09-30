<?php
    $nomeSistema = "Cursos Ai!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header class="navbar">
        <h1 id="logo">
            <?php echo $nomeSistema; ?> 
        </h1>
        <nav>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Curso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cadastrar</a>
                </li>
            </ul>
        </nav>
</header>
<main>
    <section class="container mt-4">
        <div class="row justify-content-around">
            <div class="col-lg-3 card text-center">
                <h2>Titulo produto</h2>
                <img src="img/fullstack.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">R$ 15,00</h5>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>

            <div class="col-lg-3 card text-center">
                <h2>Titulo produto</h2>
                <img src="img/fullstack.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">R$ 15,00</h5>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>

            <div class="col-lg-3 card text-center">
                <h2>Titulo produto</h2>
                <img src="img/fullstack.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">R$ 15,00</h5>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
    </section>
</main>
    
</body>
</html>