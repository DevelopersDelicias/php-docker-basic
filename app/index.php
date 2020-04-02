<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>
<body>
    <?php
        $name = isset($_GET["name"]) ? $_GET["name"] : "Benjamin";
    ?>
    <p>Hello <?php echo $name ?></p>
</body>
</html>