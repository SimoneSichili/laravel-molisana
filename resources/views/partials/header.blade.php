<header>
    <img src="{{ asset("img/marchio-sito-test.png") }}" alt="Logo La Molisana">
    <nav>
        <ul>
            <li class="{{Route::currentRouteName() == 'home' ? 'active' : ''}}">
                <a href="{{ route("home") }}">Home</a>
            </li>
            <li class="{{Route::currentRouteName() == 'prodotto' ? 'active' : ''}}">
                <a href="{{ route("prodotto", ["id" => 0]) }}">Prodotti</a>
            </li>
            <li  class="{{Route::currentRouteName() == 'news' ? 'active' : ''}}">
                <a href="#">News</a>
            </li>
        </ul>
    </nav>
</header>