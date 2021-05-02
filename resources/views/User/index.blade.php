<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Listado de Usuarios Registrados</title>
</head>
<body>
<div class="container">

                 <div class="row">
                     <div class="col-md-12">
                         <br>
                         <a href="{{ url('users/create') }}" class="btn btn-primary">Crear nuevo usuario</a>
                         <br>
                         @if(session('status'))
                         <div class="alert alert-success">
                             {{session('status')}}
                         </div>
                         @endif

                         <br>
                         <table class="table table-striped table-bordered" >
                             <thead>
                             <tr>
                                 <th>ID</th>
                                 <th>NOMBRE</th>
                                 <th>APELLIDO</th>
                                 <th>CORREO ELECTRONICO</th>
                                 <th>OPCIONES</th>
                             </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id }}</td>
                        <td>{{$user->name }}</td>
                        <td>{{$user->lastname }}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <form action="{{ url('users',$user->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <a href="{{url('users' , $user->id)}}" class="btn btn-info btn-sm">Detalles</a>
                                <a href="{{url('users/edit', $user -> id)}}" class="btn btn-warning btn-sm ">Editar</a>
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$users->Links()}}
        </div>
    </div>
</div>
</body>
</html>
