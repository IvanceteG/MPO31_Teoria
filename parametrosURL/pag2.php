<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parametros URL</title>
</head>
<body>
    <h1>Esta es la pagina 2</h1>
    <?php
    echo $_GET['nom'];
    echo '<br>';
    echo $_GET['edat'];

    //isset: Lo usamos para comprobar que existe un parametro con ese nombre

    if(isset($_GET['nom'])){

        $n = $_GET['nom'];


        echo n;
    }else{
        echo 'No existe el parametro nombre';
    }

    ?>
</body>
</html>