<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
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
        <h3> EDIT PRODUCT {{ $product->name }} </h3>
        <form action="{{ route('update', $product->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="name">Name </label>
            <input type="text" name="name" id="name" value="{{ $product->name }}" required>
            <label for="price">Price (R$)</label>
            <input type="number" name="price" id="price" value="{{ $product->price }}" required>

            <label for="description">Description </label>
            <input type="text" name="description" id="description" value="{{ $product->description }}" required>

            <!-- <a href="newProduct.php"><button type="button">Add</button></a> -->
            <button type="submit">Edit</button>
        </form>
    </header>
</body>

</html>
