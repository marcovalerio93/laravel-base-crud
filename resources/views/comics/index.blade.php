@extends('layout.app')

@section('title', 'lista fumetti')

@section('content')

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">thumb</th>
                <th scope="col">price</th>
                <th scope="col">series</th>
                <th scope="col">sale_data</th>
                <th scope="col">type</th>
            </tr>
            </thead>
            <tbody>
                 @foreach ($fumetti as $fumetto)
                    <tr>
                        <th scope="row">{{$fumetto->id}}</th>
                        <td>{{$fumetto->title}}</td>
                        <td>{{$fumetto->description}}</td>
                        <td>{{$fumetto->thumb}}</td>
                        <td>{{$fumetto->price}}</td>
                        <td>{{$fumetto->series}}</td>
                        <td>{{$fumetto->sale_date}}</td>
                        <td>{{$fumetto->type}}</td>                     
                    </tr> 
                 @endforeach
            </tbody>
        </table>
    </div>

@endsection 
