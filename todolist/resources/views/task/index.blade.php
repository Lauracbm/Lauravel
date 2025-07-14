<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do list en laravel</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900  m-3 text-amber-50 flex flex-col justify-center mx-100 my-30 ">

    <section class="bg-gradient-to-b from-gray-800 to-gray-900 rounded-xl shadow-lg shadow-gray-700 flex flex-col p-15 w-2xl justify-center items-center">

        <blockquote>
            <h1 class="text-3xl text-center font-bold mb-4">Lista de Tareas</h1>
        </blockquote>

        <form action="{{url('/')}}" method="post" class="flex flex-row gap-4 mt-10 mb-4 mx-20 text-gray-900">
            @csrf
            <input type="text" name="task" id="task" class="bg-gray-400 p-0.5 w-[500px] border-2 border-white">

            <input type="submit" value="Agregar" class="bg-green-400 p-2 rounded-md font-bold text-white hover:bg-blue-900 transition duration-100 ease-in-out hover:text-gray-500">
        </form>

        <br>

        <table class=" rounded-xl border-gray-300 w-xl bg-gray-300 text-gray-800 font-mono-semibold  mx-20">

            <tr class="bg-blue-300 text-20 text-sky-950 font-serif-bold rounded-xl text-center border-2 border-blue-400">
                <td class=""><b>Nombre Tarea</b></td>
                <td><b>Acción</b></td>
            </tr>
            @foreach($tasks as $task)
            <tr class="even:bg-gray-50 hover:size-13 hover:bg-blue-200 transform duration-75">
                <td class="p-2 ">{{ $task->task}}</td>
                <td>
                    <form action="{{ route ('task.destroy', $task->id)}}" method="post" class="flex justify-center items-center">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="x" class="bg-red-500  rounded-3xl border-red-500 w-10 text-center font-bold text-white pb-1 hover:size-8 hover:bg-red-700 transition duration-10 ease-in-out">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </section>



</body>

</html>