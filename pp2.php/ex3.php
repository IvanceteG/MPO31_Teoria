<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercici 3: Nombre aleatori parell o senar</title>
    <style>
        .parell { 
            background: #74ff92ff; 
            color: #222; 
            border-radius: 8px; 
            padding: 18px; 
            margin: 24px auto; 
            max-width: 320px; 
            text-align: center; 
            font-size: 16px; 
            box-shadow: 0 2px 8px #cfd8dc; 
        }
        .senar { 
            background-color: #ffc1c1ff; 
            color: #222; 
            border-radius: 8px; 
            padding: 18px; 
            margin: 24px auto; 
            max-width: 320px; 
            text-align: center; 
            font-size: 16px; 
        }
        body { 
            font-family: 'Segoe UI', Arial, sans-serif; 
            background: #eef4fa; 
        }
        h1 { 
            text-align: center; 
            margin-top: 32px; 
        }
    </style>
</head>
<body>
    <h1>Nombre aleatori parell o senar</h1>
    <?php
    $numero = rand(0, 100);
    if ($numero % 2 == 0) {
        echo "<div class='parell'>El nombre generat és <strong>$numero</strong><br>És <strong>parell</strong></div>";
    } else {
        echo "<div class='senar'>El nombre generat és <strong>$numero</strong><br>És <strong>senar</strong></div>";
    }
    ?>
</body>
</html>