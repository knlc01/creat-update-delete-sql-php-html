<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vistas/css/style.css">
    <title>CRUD Tables</title>
</head>
<body>
    <header>
        <h1>hola</h1>        
    </header>
    <main>
        <div class="padre">
            <?php 
                require_once("models/conection.php"); 
                $v1 = new Conection();
                $v1->getConection();
            ?>
            <a href="create">create</a>
            <a href="delete">delete</a>
            <a href="update">update</a>
            <?php
                require_once("controllers/controller.php");
                $v2 = new ControllerIndex();
                $v2->ctrlIndex();
            ?>
        </div>
    </main>
</body>
</html>