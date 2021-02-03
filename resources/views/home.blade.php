@extends('layouts.main')

@section('content')
    <div class="bg-container">
        <div class="container">
            <section>
                <h2>LE LUNGHE</h2>
                <div class="cards">
                    @foreach ($lunghe as $pasta)
                        <div class="card">
                            <img src="{{ $pasta["src"] }}" alt="{{ $pasta["titolo"] }}">
                            <div class="card-link">
                                <a href="#">{{ $pasta["titolo"] }}</a>
                            </div>
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
                            <div class="card-link">
                                <a href="#">{{ $pasta["titolo"] }}</a>
                            </div>
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
                            <div class="card-link">
                                <a href="#">{{ $pasta["titolo"] }}</a>
                            </div>
                        </div>            
                    @endforeach
                </div>
            </section>
        </div>
    </div>
@endsection