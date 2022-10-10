@extends('layout.app')

@section('title', 'Crea nuovo fumetto')

@section('content')
<div class="container">
    <form action="{{route('comics.store')}}"methods="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="tilte"/>
        </div>  
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">description</label>
            <textarea id="description" name="description" class="from-control"></textarea> 
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb"/>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price"/>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">series</label>
            <input type="text" class="form-control" id="series" name="series"/>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">sale date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date"/>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">type</label>
            <input type="text" class="form-control" id="type" name="type"/>
        </div>
        
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>

</div>


@endsection

