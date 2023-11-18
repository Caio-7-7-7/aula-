<?php
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$email = $_POST["email"];

if ($nome == "caio" and $senha == "12345") {
    header("Location: index.php");
} else if ($nome == "admin" and $email == "admin@gmail.com" and  $senha == "admin123") {
    header("Location: site_admin.php");
} else {
    print("Nome/senha inválido");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Esta é a página de Admin</h1>
</body>

</html>