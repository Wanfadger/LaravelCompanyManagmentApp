@extends('layout.layout')
@section('title' , 'Customer Details')

@section('main-content')
 <div class="container">
     <div class="row">
         <div class="col-sm-8">
             <h1>Details for {{$customer->name}} </h1>
         </div>
     </div>

     <div>
     <p>email: {{$customer->email}}</p>
     <p>status: {{$customer->active ? "active" : "inactive"}}</p>
         <p>company: {{$customer->company->name}}</p>
     </div>
 </div>
@endsection