<?php
if (isset($_POST['submit'])) {
    $height = $_POST['height'];
    $age = $_POST['age'];
    $lawsuit = $_POST['lawsuit'];

    $errors = [];

    if ($height < 120) {
        $errors[] = "La altura debe ser mayor a 120 cm.";
    }
    if ($age < 16) {
        $errors[] = "Debe tener una edad superior a 16 años.";
    }
    if ($lawsuit !== 'yes') {
        $errors[] = "Debe aceptar no llevarnos a juicio por daños y perjuicios.";
    }

    if (empty($errors)) {
        echo '<p class="success">¡Felicidades! Puede subir a la Montaña Rusa. Aquí está su ticket:</p>';
        echo '<img class="images" src="images.jpg" alt="images">';
    } else {
        foreach ($errors as $error) {
            echo '<p class="error">' . $error . '</p>';
        }
    }

}
?>
</div>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
    <title>Validador Montaña Rusa</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .container h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group input[type="radio"] {
            width: auto;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
          
            border: none;
          
            font-size: 16px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
            text-align: center;
        }
        .ticket {
            display: block;
            margin: 20px auto;
        }
    </style> 
   
</head>
<body>
    
    <div class="container">
        <h2>Validador Montaña Rusa</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="height">Altura (cm):</label>
                <input type="number" id="height" name="height" min="0" pattern="\d+" required>
            </div>
            <div class="form-group">
                <label for="age">Edad:</label>
                <input type="number" id="age" name="age" min="0" required>
            </div>
            <div class="form-group">
                <label>¿Rechaza llevarnos a juicio por daños y perjuicios de un mal mantenimiento?</label>
                <input type="radio" id="yes" name="lawsuit" value="yes" required>
                <label for="yes">Sí</label>
                <input type="radio" id="no" name="lawsuit" value="no" required>
                <label for="no">No</label>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Validar</button>
            </div>
        </form>

    
</body>
</html>
