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
        <img src="{{ asset("img/marchio-sito-test.png") }}" alt="Logo La Molisana">
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
        <div class="container">
            <div class="columns">
                <div class="column">
                    <img src="{{ asset("img/marchio-sito-test.png") }}" alt="Logo La Molisana">
                    <ul>
                        <li>Ragione sociale: La Molisana S.P.A.</li>
                        <li>Sede legale: Contrada Colle delle Api, 100/A</li>
                        <li>86100 - Campobasso (CB)</li>
                        <li>Pec: lamolisana@pec.it</li>
                        <li>Tel: +39 0874 4981</li>
                        <li>Fax: +39 0874 629584</li>
                        <li>info@lamolisana.it (per segnalazioni degli utenti)</li>
                        <li>commerciale@lamolisana.it</li>
                        <li>export@lamolisana.it</li>
                        <li>numero verde 800 818 081</li>
                        <li>telefono 380 12 82 455</li>
                    </ul>
                </div>
                <div class="column">
                    <h3>PASTIFICIO</h3>
                    <ul>
                        <li><a href="#">Il Pastificio</a></li>
                        <li><a href="#">Grano decorticato a pietra</a></li>
                        <li><a href="#">Il Molise c'è</a></li>
                        <li><a href="#">Filiera Integrata</a></li>
                        <li><a href="#">100 anni di pasta</a></li>
                        <li><a href="#">Sartoria della pasta</a></li>
                        <li><a href="#">Spaghetto Quadrato</a></li>
                        <li><a href="#">Le persone</a></li>
                    </ul>
                    <h3>PRODOTTI</h3>
                    <ul>
                        <li><a href="#">Le Classiche</a></li>
                        <li><a href="#">Le Integrali</a></li>
                        <li><a href="#">Le Speciali</a></li>
                        <li><a href="#">Le Biologiche</a></li>
                        <li><a href="#">Le Gluten-Free</a></li>
                        <li><a href="#">Le Semole</a></li>
                        <li><a href="#"> Le Extra di Lusso</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h3>COLLEZIONE DA CHEF</h3>
                    <ul>
                        <li><a href="#">Collezione da Chef</a></li>
                        <li><a href="#">Grandi Cucine</a></li>
                        <li><a href="#">Biologiche</a></li>
                        <li><a href="#">Quadrate</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    {{-- /footer --}}

</body>
</html>