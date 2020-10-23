@extends('layouts.template')
@section('title')
    Dashboard
@endsection
@section('content')

@if (session('status'))
<div class="alert alert-success">{{session('status')}}</div>
    
@endif
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <a href="{{route('create')}}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Prices</th>
              <th>status</th>
              <th>Added at</th>
              @hasrole('admin')
              <th>action</th>
              @endrole
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
              <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->name}}</td>
              <td>{{$product->price}}</td>
              <td class="badge {{($product->status == 'accepted') ? 'badge-success' : 'badge-warning'}}">{{$product->status}}</td>
              <td>{{$product->created_at}}</td>
              @hasrole('admin')
              <form action="{{route('update')}}" method="post">
                {{ csrf_field() }}
                <input type="text" name="id" id="id" value="{{$product->id}}" hidden>
                <td><button type="submit" class="btn btn-{{$product->status == "accepted" ? "secondary" : "success" }}" {{$product->status == "accepted" ? "disabled" : "" }}>approve</button></td>
              
              </form>
              @endrole
            </tr>
              @endforeach
           
          </tbody>
        </table>
      </div>
    </div>
  </div>
    
@endsection