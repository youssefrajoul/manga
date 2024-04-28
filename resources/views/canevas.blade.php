<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/canevas.css') }}">
    <title>WEBG4</title>
</head>

<body class="grid-container">
    <header >
        <h2>WEB4 - Serie - Manga</h2>
    </header>
    <aside>
        <button>
            <a href="/">Accueil</a>
        </button>
        <br>
        <button>
            <a href="/serie/create">Nouvelle Serie</a>
        </button>
    </aside>
    <main>
        <h2>Les meilleures séries Manga</h2>
        @yield('content')
    </main>
    <footer>
        <h4>WEBG4 | 59939 | Youssef Rajoul | NVS</h4>
    </footer>
</body>

</html>