<?php

// array multidimensional

$alumnos = [
    [
        'nombre' => 'Juan',
        'apellido' => 'Perez',
        'edad' => 21,
        'curso' => 'DAW2',
        'inteligente' => true
    ],
    [
        'nombre' => 'Juan',
        'apellido' => 'Alberto',
        'edad' => 20,
        'curso' => 'DAW2',
        'inteligente' => false
    ],
    [
        'nombre' => 'Manuel',
        'apellido' => 'Gil',
        'edad' => 21,
        'curso' => 'DAW2',
        'inteligente' => true
    ]
];

var_dump($alumnos);
echo '<br><br>';
print_r($alumnos);

foreach($alumnos as $alumno){
    echo "<h1>{$alumno['nombre']} {$alumno['apellido']}</h1>";
    echo "<p>Edad: {$alumno['edad']}</p>";
    echo "<p>Curso: {$alumno['curso']}</p>";
    echo "<p>Inteligente: " . ($alumno['inteligente'] ? 'Sí' : 'No') . "</p>";
}
?>
