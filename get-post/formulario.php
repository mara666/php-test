<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET y POST</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="text-center">
    <h2>GET y POST</h2>
    <form action="imprimir.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <label for="email">E-mail:</label>
        <input type="email" name="email">
        <br>
        <input type="submit">
    </form>
</body>

</html>