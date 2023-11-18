<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css">
    <title>Document</title>
</head>
<body class="body-index">
    <h1>página inicial</h1>

    <?php

$nome=$_POST["nome"];
$senha=$_POST["senha"];
$email=$_POST["email"];

if($nome=="caio" && $senha=="12345")
header("location!: "." site.php");


elseif ($nome == "admin" && $senha == "admin123" && $email == "admin@gmail.com") 
    // Se o usuário for admin, faça algo adicional, por exemplo, redirecione para um site_admin.php
    header("Location: site_admin.php");


else
print("nome/senha inválido")












    ?>
</body>
</html>