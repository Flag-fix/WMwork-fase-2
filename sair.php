<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saindo</title>
</head>

<body>


    <?php

    session_start();
    session_destroy();

    header("Location:login.php")


    ?>

</body>

</html>