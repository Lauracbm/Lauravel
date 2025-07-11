<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Productos</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-black text-white">
    <header class="">
        <h1>Productos</h1>
        <p>Agregue sus nuevos productos</p>
    </header>
    <main>
        <form method="POST" action="{{route('/')}}">
            <div>
                <label for="nombre">Nombre del producto</label>
                <input type="text" name="nombre" required class="color-white bg-gray-800 border border-gray-600 rounded p-2">
            </div>
            <div>
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" class="color-white bg-gray-800 border border-gray-600 rounded p-2">
            </div>
            <div>
                <label for="precio">Precio</label>
                <input type="number" name="precio" step="0.01" min="0" value="5.00" required class="color-white bg-gray-800 border border-gray-600 rounded p-2">
            </div>
            <div>
                <label for="estado">Estado</label>
                <select name="estado">
                    <option value="Disponible" selected>Disponible</option>
                    <option value="Agotado">Agotado</option>
                </select>
            </div>
            <div>
                <label for="stock">Stock</label>
                <input type="number" name="stock" min="0" required class="color-white bg-gray-800 border border-gray-600 rounded p-2">
            </div>
            <div>
                <label for="artista">Artista</label>
                <input type="text" name="artista" class="color-white bg-gray-800 border border-gray-600 rounded p-2">
            </div>
            <div>
                <label for="formato">Formato</label>
                <select name="formato">
                    <option value="no especificado" selected>no especificado</option>
                    <option value="CD">CD</option>
                    <option value="Vinilo">Vinilo</option>
                    <option value="Cassette">Cassette</option>
                    <option value="Digital">Digital</option>
                </select>
            </div>
            <input type="submit" class="color-white bg-gray-800 border border-gray-600 rounded p-2" value="Guardar producto">
        </form>
    </main>
</body>
</html>