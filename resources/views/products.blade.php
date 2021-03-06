@extends('layouts.app')



@section('title','sezione prodotti')



@section('content')

    <div class="container">
    
        
        @foreach($formati as $tipo => $formato)
        <h2>{{ $tipo }}</h2>
        
        <div class="card-container">
        
            @foreach($formato as $key => $pasta)
            <div class="card">
                <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                <div class="overlay">
                    <a href="{{ route('pagina-dettagli',['id' => $key]) }}">{{ $pasta['titolo'] }}</a>
                </div>
            </div>
            @endforeach

        </div>
        @endforeach

    </div>
        

@endsection

