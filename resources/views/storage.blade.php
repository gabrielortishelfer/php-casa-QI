<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        button {
            margin-bottom: 10px;
            /* Adicione o espaçamento desejado entre os botões */
        }


        /* Remover sublinhado dos links */
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <header>

        <h3> Storage </h3>
        @foreach ($products->all() as $product)
            <p>{{ $product->name }}: R${{ $product->price }} / Descrição: {{ $product->description }} <a href="{{route('edit',$product->id)}}">Editar</a> / <a href="{{route('delete',$product->id)}}">Deletar</a></p>
        @endforeach
        <!-- <a href="storage.php"><button type="button">Full View</button></a> -->
        <a href={{ route('dashboard') }}><button type="button">Full view</button></a>


    </header>
</body>

</html>
