<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        button {
            margin-bottom: 10px; /* Adicione o espaçamento desejado entre os botões */
        }

        a {
            text-decoration: none;
          }
    </style>
</head>

<body>
    <header>
        <!-- Formulário de login -->
        <form action="auth.php" method="post">
            <h3> Dashboard </h3>
            <a href={{route('newProduct')}}><button type="button">New Product</button></a>
            <a href={{route('storage')}}><button type="button">Storage</button></a>
            <a href={{route('index')}}><button type="button">Home</button></a>
        </form>
    </header>
</body>

</html>
