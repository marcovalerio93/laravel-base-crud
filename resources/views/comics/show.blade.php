@extends('layout.app')

@section('title', 'dettagli')

@section('content')

    <div class="container">

        <p><strong>Dettagli :</strong>{{$fumetto->description}}</p>
        <p><strong>Thumb :</strong>{{$fumetto->thumb}}</p>


        <a class="btn btn-primary" href="{{route('comics.index')}}">Back</a>


    </div>


@endsection