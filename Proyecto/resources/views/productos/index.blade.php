<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black">
    <h2>lista de productos</h2>

    <table class="border-white border-2">
        <tr class="border-white border-2">
            <td>id</td>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Descripcion</td>
        </tr>
        @foreach ($productos as $producto)
        <tr class="border-white border-2">
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->descripcion}}</td>
        </tr>
        @endforeach
    </table>

    <a href="RegProductos">Registrar Producto</a>
</body>
</html>