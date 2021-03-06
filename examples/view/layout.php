<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>
    </head>
    <body>
        <header>
            <h1>{{ $title }}</h1>
        </header>

        <main>
            @block content
                //
            @endblock
            
            @include ('credits')
        </main>

        <footer>
            {{ date('Y') }} PHP-Template-Engine
        </footer>
    </body>
</html>
