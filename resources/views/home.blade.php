@extends('layouts.main')

@section('content')
    <div class="bg-container">
        <div class="container">
   
            @include('partials.card', ["title" => "LE LUNGHE", "array" => $lunghe]);

            @include('partials.card', ["title" => "LE CORTE", "array" => $corte]);

            @include('partials.card', ["title" => "LE CORTISSIME", "array" => $cortissime]);

        </div>
    </div>
@endsection