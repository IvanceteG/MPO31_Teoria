<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Peliculas</title>
</head>
<body>
    <h1>Ranking Películas</h1>

    <?php

    /*$pelicula1 = "Cars 1";
    $pelicula2 = "Gru 2 Mi villano favorito";
    $pelicula3 = "Fast and Furious 6";
    $pelicula4 = "Polar Express";
    $pelicula5 = "Un espia y medio";
    $puntuacion1 = 7.0;
    $puntuacion2 = 6.6;
    $puntuacion3 = 7.0;
    $puntuacion4 = 5.8;
    $puntuacion5 = 6.3;*/

    $lista_peliculas = ["Cars 1", "Gru 2 Mi villano favorito", "Fast and Furious 6", "Polar Express", "Un espia y medio"];
    $lista_puntuaciones = [7.0, 6.6, 7.0, 5.8, 6.3];

    ?>


        <table border='2'>
            <thead>
                <tr>
                    <th>Nombre de la película</th>
                    <th>Portada</th>
                    <th>Valoracion</th>
                </tr>
                </thead>
                <tbody>
                <?php
                for ($i=0;$i<=count($lista_peliculas)-1;$i++){
                    echo $i;


                    $classe = ($punts < 5) ? 'rojo' : 'verde';
    </style>
</body>
</html>