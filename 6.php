<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Comprobamos que se haya subido archivo1, es necesario comprobar si tiene la propiedad name (por ejemplo),
    // si no, evaluará como true si el usuario envia vacío el archivo
    if (isset($_FILES['archivo1']) && $_FILES['archivo1']['name'])
    {
        echo("Archivo 1 subido: " . $_FILES['archivo1']['name'] . "<br>");
    }

    if (isset($_FILES['archivo2']) && $_FILES['archivo2']['name'])
    {
        echo("Archivo 2 subido: " . $_FILES['archivo2']['name']);
    }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <p>Sube un fichero:
        <br>
        <input type="file" name="archivo1" />
        <br>
        <input type="file" name="archivo2" />
        <br>
        <input type="submit" value="Enviar" />
        </p>
    </form>
    
</body>
</html>