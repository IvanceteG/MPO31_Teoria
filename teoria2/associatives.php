<?php

$alumno = [
    'nombre' => 'Juan',
    'apellido' => 'Perez',
    'edad' => 21,
    'curso' => 'DAW2',
    'inteligente' => true
];

print_r($alumno); //Para ver el nombre y el valor
var_dump($alumno); //Para ver todos los detalles

echo $alumno['nombre'];
echo $alumno['edad'];
echo $alumno['inteligente'];

$alumno['email'] = 'juan.perez@example.com';

echo '<br><br>';
print_r($alumno);

foreach($alumno as $clave => $valor){
    echo "<h1<$clave: $valor</h1>";
}

?>