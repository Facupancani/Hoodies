<!DOCTYPE html>
    <html lang="es">

    <head>
        <base href="<?php echo BASE_URL ?>" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hoodies</title>
        <link rel="stylesheet" href="css/styles.css?1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&family=Poppins:wght@200;300&display=swap" rel="stylesheet">
    </head>


    <body>
        <nav>
            <a href="home" id="hoodies_logo"><img src="images/hoodies.png"></a>

            <ul id="nav_links">
                <a href="men">Hombre</a>
                <a href="women">Mujer</a>
                <a href="store">Todo</a>
            </ul>

            <ul id="log_icon">
            
            <?php
            if ( isset($_SESSION['logged']) && ($_SESSION['logged'] == true) ){
                echo "<a class='logout_ico' href='logout'>Logout</a>";
            }
            ?>

            <a href="login"><img id="users" src="images/icons/user.png"></a>  
            </ul>

        </nav>


        <!-- aca va el contenido de la seccion -->