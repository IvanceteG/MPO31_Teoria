
<?php

$dies=['Dilluns','Dimarts','Dimecres','Dijous','Divendres'];

echo $dies[0]; //Dilluns
echo $dies[2]; //Dimecres
echo $dies[4]; //Divendres

//Afegir element a la array
$dies[]='Dissabte';
array_push($dies, 'Diumenge');
//Eliminar l'ultim element
array_pop($dies);

//Recorrer con foreach
foreach($dies as $dia){
    echo "<h1>$Juanpedro</h1>";
}

?>