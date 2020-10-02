@extends('layouts.app')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Products</h1>
    </div>


    <div class="card">
        <form action="" method="get" class="card-header">
            <div class="form-row justify-content-between">
                <div class="col-md-2">
                    <input type="text" name="title" placeholder="Product Title" class="form-control">
                </div>
                <div class="col-md-2">
                    <select name="variant" id="" class="form-control">

                    </select>
                </div>

                <div class="col-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Price Range</span>
                        </div>
                        <input type="text" name="price_from" aria-label="First name" placeholder="From" class="form-control">
                        <input type="text" name="price_to" aria-label="Last name" placeholder="To" class="form-control">
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="date" name="date" placeholder="Date" class="form-control">
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary float-right"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>

        <div class="card-body">
            <div class="table-response">
                <table class="table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>sku</th>
                        <th>Description</th>

                        <th width="150px">Action</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($products as $product)
                    <tr>

                            <td>{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->sku}}</td>
                            <td>{{$product->description}}</td>

                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>

        <div class="card-footer">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    {{$products->links()}}
                </div>
                <div class="col-md-2">
                    <p>Showing 1 to {{$products->count()}} out of {{$count_product}}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
