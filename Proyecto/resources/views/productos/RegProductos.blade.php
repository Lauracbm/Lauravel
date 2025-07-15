<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg Producto</title>
</head>
<body>
    <form action="{{route('GuardarRoute')}}" method="post" class="bg-sky-950">
        @csrf
        <h2>Registrar Producto nuevo</h2>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" required>
        <br>

        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" id="descripcion" required></textarea>
        <br>
        
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
