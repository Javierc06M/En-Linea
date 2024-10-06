<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        .container {
            border: none;
            margin-top: -200px;
        }
        .container .container-info {
            padding: 20px;
            margin: 20px ;
        }

        .container .container-info h1 {
            font-weight: bolder;
            font-size: 30px
        }

        .container .container-info p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .container .card {
            margin-right: 40px;
            margin-left: 40px;
            margin-bottom: 20px;
            justify-content: space-around;
            display: flex;
        }

        .container .card .card-body {
            width: 310px;

        }

        .container .card .card-body .card-img img {
            width: 300px;
        }

        .container .card .card-body .card-title{
            display: flex;
            font-size: 20px;
        }

        .container .card .card-body .card-title i{
            margin-right: 5px;
        }

</style>
</head>
<body>

       <?php
        include "php/header.php"
        ?>


       <?php
            include "php/main.php";
       ?>

    <div class="container">
        <div class="container-info">
            <h1>SOLUCIONES CREATIVAS</h1>
            <p>Sin importar cual sea tu negocio, nuestro equipo puede hacer todo desde 0</p>
        </div>
        <div class="card">
            <div class="card-body">
                <a href="diseño.php">
                    <div class="card-img">
                        <img src="resources/img/idea_02.PNG" alt="">
                    </div>
                    <div class="card-title">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <h3>DISEÑO</h3>
                    </div>
                    <div class="card-text">
                        <p>Creamos diseños segun tus necesidades</p>
                    </div>
                </a>
            </div>
            <div class="card-body">
                <a href="desarrollo.php">
                    <div class="card-img">
                        <img src="resources/img/idea_03.PNG" alt="">
                    </div>
                    <div class="card-title">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <h3>DESARROLLO</h3>
                    </div>
                    <div class="card-text">
                        <p>Nuestro programadores te garantizan la perfeccion</p>
                    </div>
                </a>
            </div>
            <div class="card-body">
                <a href="edicion.php">
                    <div class="card-img">
                        <img src="resources/img/idea_01.PNG" alt="">
                    </div>
                    <div class="card-title">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <h3>EDICION DE LIBROS </h3>
                    </div>
                    <div class="card-text">
                        <p>Que el producto final llegue a tus clientes</p>
                    </div>
                </a>
            </div>
            
        </div>
    </div>

    



        <?php
            include "php/footer.php";
        ?>
</body>
</html>