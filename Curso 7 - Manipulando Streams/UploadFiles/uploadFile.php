<?php

$name = explode('.', $_FILES['archive']['name']);
$name = $name[0].'.png';
move_uploaded_file($_FILES['archive']['tmp_name'], $name);
//var_dump(move_uploaded_file($_FILES['archive']['tmp_name'], 'a.jpg'));
//var_dump($_FILES['archive']);
//é bom fazer validações para o usuario não sair enviando qualquer tipo de arquivo, não enviar .exe e etc
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Helvetica;
        }


        button {
            width: 200px;
            margin-top: 20px;
            height: 50px;
        }
    </style>
</head>

<body>
    <form action="uploadFile.php" method="post" enctype="multipart/form-data">
        <label for="archive">Upload: </label>
        <input type="file" name="archive" />
        <button>Send</button>
    </form>
</body>

</html>