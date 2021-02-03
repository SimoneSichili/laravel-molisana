<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <title>La Molisana</title>
</head>
<body>
    {{-- header --}}
    <header>
        <img src="{{ asset("img/marchio-sito-test.png") }}" alt="">
        <nav>
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Prodotti</a></li>
                <li><a href="#">News</a></li>
            </ul>
        </nav>
    </header>
    {{-- /header --}}

    {{-- main --}}
    <main>
        <div class="bg-container">
            <div class="container">
                <section>
                    <h2>LE LUNGHE</h2>
                    <div class="cards">
                        @foreach ($lunghe as $pasta)
                            <div class="card">
                                <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
                            </div>            
                        @endforeach
                    </div>
                </section>
                <section>
                    <h2>LE CORTE</h2>
                    <div class="cards">
                        @foreach ($corte as $pasta)
                            <div class="card">
                                <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
                            </div>            
                        @endforeach
                    </div>
                </section>
                <section>
                    <h2>LE CORTISSIME</h2>
                    <div class="cards">
                        @foreach ($cortissime as $pasta)
                            <div class="card">
                                <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
                            </div>            
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </main>
    {{-- /main --}}

    {{-- footer --}}
    <footer>

    </footer>
    {{-- /footer --}}

</body>
</html>