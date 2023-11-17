<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Document</title>

    <style>
        div {

            backdrop-filter: blur(10px);
            border-radius: 5px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            border: solid 1px white;
            color: white;
            width: 500px;
            height: 500px;

        }

        body {
            display: flex;
            background-image: url("https://images.unsplash.com/photo-1553095066-5014bc7b7f2d?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8d2FsbCUyMGJhY2tncm91bmR8ZW58MHx8MHx8fDA%3D");
            max-width: 1900px;
            max-height: 1080px;
            text-align: center;
        }
       h3{
        margin-bottom: 100px;
       }

    </style>
</head>



<body>
    <div>

        <h1>PHP</h1>
        <H2>exemplo 3 </H2>
        <h3>utilizando formulários</h3>


        <form action="index.php">
            <label class="nome" for="nome" name="nome">nome:</label><br>
            <input id="nome" type="text"><br><br>
            <label for="senha">senha:</label><br>   
            <input id="senha" type="password" name="senha"><br><br>  <br>
            
            <button type="submit">Aperte o botão </button>
           
        </form>
    </div>
</body>

</html>