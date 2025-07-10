<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do list en laravel</title>
</head>
<body>
    <form action="{{url('/')}}" method="post">
        @csrf
        <input type="text" name="task" id="task">

        <input type="submit" value="Agregar">
    </form>

    <br>

    <table border="1">
        <tr>
            <td><b>Nombre Tarea</b></td>
            <td><b>Acción</b></td>
        </tr>
        @foreach($tasks as $task)
         <tr>
            <td>{{ $task->task}}</td>
            <td>
                <form action="{{ route ('task.destroy', $task->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="x">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>
