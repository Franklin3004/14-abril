<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" >
            <br>
            <table class="table table-striped table-bordered">
                <tr>
                    <td class="text-center" colspan="2"><strong>DATOS PERSONALES</td>
                </tr>
                <tr>
                    <td><strong>NOMBRE</td>
                    <td> {{$user->name}}</td>
                </tr>
                <tr>
                    <td><strong>APELLIDO</td>
                    <td>{{$user->lastname}}</td>
                </tr>
                <tr>
                    <td><strong>CORREO</td>
                    <td>{{$user->email}}</td>
                </tr>
                <a href="{{url('users')}}">Volver al inicio</a>
            </table>
        </div>
    </div>
</div>

</body>
</html>
