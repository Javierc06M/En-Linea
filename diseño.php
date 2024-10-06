<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        .container {
            margin-top: -200px;
            padding-right: 120px;
            padding-left: 120px;
        }

        .container-titulo {
            display: flex;
            margin-bottom: 40px;
            align-items: center;
            font-size: 30px;
        }

        .container-titulo i {
            margin-right: 20px;
        }

        .container-general {
            display: flex;
            justify-content: space-around;
            margin-bottom: 60px;
        }

        .container-general {
            border: 1px solid black;
            width: 1200px;
        }

        .container-general img {
            width: 700px;
            height: 300px;
            padding: 10px;
        }

        .container-general .container-parrafo {
            width: 400px;
            padding: 10px;
            font-size: 20px;
            text-align: justify;
        }
    </style>
</head>
<body>
    <?php
        include 'php/header.php';
    ?>

    <?php
        include 'php/main.php'
    ?>

    <div class="container">
        <div class="container-titulo">
            <i class="fa-solid fa-pen-to-square"></i>
            <h2>DISEÑO</h2>
        </div>
        <div class="container-general">
            <div class="container.img">
                <img src="resources/img/idea_01.PNG" alt="">
            </div>
            <div class="container-parrafo">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                   Quod doloribus voluptates repellendus excepturi expedita minus et, 
                   tempore cupiditate corporis porro, blanditiis dolores aliquam sequi maiores. Debitis possimus dolor quibusdam dicta?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est eveniet ut exercitationem perferendis. In deserunt soluta 
                    laborum dolor tempore eveniet voluptatum vel culpa ipsum et quidem aspernatur, quaerat fuga impedit.
                </p>
            </div>
        </div>
    </div>

    <?php
        include 'php/footer.php';
   ?>
</body>
</html>