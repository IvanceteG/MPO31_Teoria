<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pp 1 - Teoria</title>
</head>
<body>
    <h1>Hola pp1 teoria</h1>

    <?php
    //Solo se puede escribir dentro del echo con estos dos tipos de comillas
    echo '<h2>Hola subtitulo</h2>';
    echo "Hola mundo con dos comillas";

    $nom = 'Miguel Angel';
    $apellido = "Saiz";
    $edad = 21;

    echo $frase = "<br>Hola $nom $apellido tienes $edad años";

    //if

if ($edad < 22){
    echo "Eres mayor de edad";
}else{
    echo "Eres menor de edad";
}
    //==
    //%
    //!=
    //<= => < >
    //Bucles

    ?>

    <section class="div-padre">

    <?php

    for($i= 0; $i<=10;$i++){
        //echo "Numero: $i <br>";
        echo "<div class='num-box'>Número: $i <br></div>";
        echo '<div class="num-box">Número: ' . $i . ' <br></div>';
        echo "<div class=\"num-box\">Número:  $i <br></div>";
    }
    ?>
    </section>

    <style>
    .num-box{
        background-color: red;
        padding 2rem;
    }

    .div-padre{
        background-color: green;
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }
    </style>
</body>
</html>