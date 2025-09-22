<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Taules de multiplicar (1-11)</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background: #f9f9f9; 
        }
        .taula { 
            background-color: #fff; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            margin: 16px; 
            padding: 16px; 
            display: inline-block; 
            vertical-align: top; 
        }
        .taula h2 { 
            margin-top: 2px; 
            text-align: center; 
        }
        .resultat { 
            margin: 4px; 
        }
    </style>
</head>
<body>
    <h1>Taules de multiplicar del 1 a l'11</h1>
    <?php
    for ($i = 1; $i <= 11; $i++) {
        echo "<div class='taula'>";
        echo "<h2>Taula del $i</h2>";
        for ($j = 1; $j <= 10; $j++) {
            $resultat = $i * $j;
            echo "<div class='resultat'>$i x $j = $resultat</div>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>