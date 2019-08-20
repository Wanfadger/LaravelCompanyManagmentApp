
@extends('layout.layout')
@section('title' , 'Edit Details for '.$customer->name)


@section('main-content')
<div class="container">
    <h4>Edit Details for {{$customer-> name}}</h4>
<div class="row">
        <div class="col-sm-8">
        <form action="/customers/{{$customer->id}}" method="POST">
        @method("PATCH") 
           @include("layout.form" )

            <button type="submit" class="btn btn-primary btn-sm">Add Customer</button>
        
        </form>

        </div>
    </div>
</div>

@endsection