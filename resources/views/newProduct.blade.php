<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        button {
            margin-bottom: 10px; /* Adicione o espaçamento desejado entre os botões */
        }


        /* Remover sublinhado dos links */
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <header>
        <!-- Formulário de login -->
        <form action="auth.php" method="post">
            <h3> NEW PRODUCT </h3>
            <label for="xxxxxxx">Name </label>
            <input type="email" name="xxxxxxx" id="xxxxxxx" required>

            <label for="xxxxxxx">Price (R$)</label>
            <input type="email" name="xxxxxxx" id="xxxxxxx" required>

            <label for="xxxxxxx">Description </label>
            <input type="email" name="xxxxxxx" id="xxxxxxx" required>

           <!-- <a href="newProduct.php"><button type="button">Add</button></a> -->
           <a href={{route('dashboard')}}><button type="button">Add</button></a>
        </form>

    </header>
</body>

</html>
