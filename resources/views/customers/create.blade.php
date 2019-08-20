
@extends('layout.layout')
@section('title' , 'Add customer')


@section('main-content')
<div class="container">
<div class="row">
        <div class="col-sm-8">
        <form action="/customers" method="POST">
           @include("layout.form")

            <button type="submit" class="btn btn-primary btn-sm">Add Customer</button>
        
        </form>

        </div>
    </div>
</div>

@endsection