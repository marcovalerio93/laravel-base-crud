@extends('layout.app')

@section('title', 'Modifica')

@section('content')

    <div class="container">

        <form action="{{route('comics.update' , ['comic'=> $fumetto->id])}}" method="POST">

            @csrf
            @method('PUT')
    
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{$fumetto->title}}"/>
            </div>  
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$fumetto->description}}"/>            
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$fumetto->thumb}}"/>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$fumetto->price}}"/>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$fumetto->series}}"/>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">sale date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$fumetto->sale_date}}"/>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{$fumetto->type}}" />
            </div>
            
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
        <br>

        <a class="btn btn-primary" href="{{route('comics.index')}}">Back</a>


    </div>


@endsection