<!DOCTYPE HTML>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <!--nuestro título podrá ser modificado-->
        <title>@yield('titulo')</title>
    </head>
    <body>

    <h1>Autentificacion</h1>
 		 {{ Form::open(array('url' => 'comprobar')) }}
            {{Form::label('username', 'Username')}}
            {{Form::text('username', '')}}
            {{"<br />"}}
            {{Form::label('password', 'Password')}}
            {{Form::password('password', '')}}
            {{"<br />"}}
            {{Form::submit('Login')}}
        {{ Form::close() }}
    </body>
</html>