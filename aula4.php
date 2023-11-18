<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    <style>
        textarea {
            resize: none;
        }
    </style>
</head>

<body class="body-aula4">
    <form class="form-aula4" action="site_admin.php" method="POST">
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" id="nome"><br><br>

        <label for="email">E-mail</label><br>
        <input type="text" name="email" id="email"><br><br>

        <label for="senha">Senha</label><br>
        <input type="password" name="senha" id="senha"><br><br>

        <!-- <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea><br> -->
        <input type="submit">
    </form>
</body>

</html>
