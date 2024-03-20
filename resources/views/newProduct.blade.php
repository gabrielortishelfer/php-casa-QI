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
        <h3> NEW PRODUCT </h3>
        <form action="{{route('store')}}" method="post">
            @csrf
            <label for="name">Name </label>
            <input type="text" name="name" id="name" required>

            <label for="price">Price (R$)</label>
            <input type="number" name="price" id="price" required>

            <label for="description">Description </label>
            <input type="text" name="description" id="description" required>

           <!-- <a href="newProduct.php"><button type="button">Add</button></a> -->
           <button type="submit">Add</button>
        </form>

    </header>
</body>

</html>
