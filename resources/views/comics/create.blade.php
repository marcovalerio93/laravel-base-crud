@extends('layout.app')

@section('title', 'Crea nuovo fumetto')

@section('content')

<div class="container">

    <form action="{{route('comics.store')}}" method="POST">

        @csrf

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}"/>
        </div>  
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}"/>            
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}"/>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}"/>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}"/>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">sale date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date')}}"/>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{old('type')}}"/>
        </div>
        
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>

</div>


@endsection

