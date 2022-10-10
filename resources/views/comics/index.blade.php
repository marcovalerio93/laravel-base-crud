@extends('layout.app')

@section('title', 'lista fumetti')

@section('content')

    <div class="container">

        <a class="btn btn-primary" href="{{route('comics.create')}}">Crea</a>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">price</th>
                <th scope="col">series</th>
                <th scope="col">sale_data</th>
                <th scope="col">tipe</th>
                <th scope="col">action</th>
            </tr>
            </thead>
            <tbody>
                 @foreach ($fumetti as $fumetto)
                    <tr>
                        <th scope="row">{{$fumetto->id}}</th>
                        <td>{{$fumetto->title}}</td>
                        <td>{{$fumetto->price}}</td>
                        <td>{{$fumetto->series}}</td>
                        <td>{{$fumetto->sale_date}}</td>
                        <td>{{$fumetto->type}}</td>   
                        <td><a class="btn btn-primary" href="{{route('comics.show', ['comic'=> $fumetto->id])}}">Vedi</a></td>                  
                    </tr> 
                 @endforeach
            </tbody>  
        </table>
    </div>

@endsection 
