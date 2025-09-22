<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PP2 - Nombres parells entre 50 i 500</title>
    <style>
        body {
            background: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .contenedor_nombres {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin: 10px 20px;
            max-width: 900px;
        }
        .num-box {
            background: #4caf50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1>Nombres parells entre 50 i 500</h1>
    <div class="contenedor_nombres">
        <?php
        for ($i= 50; $i <= 500; $i += 2) {
            echo "<div class='num-box'>$i</div>";
        }
        ?>
    </div>
</body>
</html>