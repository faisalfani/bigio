@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product</div>

                <div class="card-body">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col col-sm-6">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <span class="badge badge-success">Available</span>
                                  <h3 class="card-title">{{$product->name}}</h3>
                                  <p class="card-text">Rp. {{$product->price}}</p>
                                <p>{{$product->created_at}}</p>
                                </div>
                              </div>


                        </div>
                            
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
