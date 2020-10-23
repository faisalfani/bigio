@extends('layouts.template')

@section('title')
    Tambah data
@endsection
@section('content')

<form method="post" action="{{route('store')}}">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="Name">Nama Produk</label>
      <input type="text" class="form-control" id="name" name="name"  required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Harga</label>
      <input type="number" class="form-control" id="price" name="price" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection