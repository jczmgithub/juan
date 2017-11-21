<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Examen 1ª Evaluacion</title>

    </head>
    <body>
        @if ($errors->any())
            <div class="alert alert-danger">
                <p>Oops! Something went wrong</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="formulario" method="post">
            {!! csrf_field() !!}
            Usuario: <input type="text" name="usuario"><br>
            <input type="submit">
        </form>
    </body>
</html>
