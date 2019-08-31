@extends('layout.layout')
@section('title' , 'Customer List')

@section('main-content')
<div class="container">
  @can('create' , \App\Customer::class)
  <div class="row pt-4">
<a  class="btn btn-primary btn-sm mb-3"href="/create" >Add Customer</a>
</div>
  @endcan

    <div class="row">
        <div class="col-12">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">active</th>
      <th scope="col">company</th>
      <th scope="col">action</th>  
      </tr>
  </thead>
  <tbody>
      <?php $count= 1 ?>
   @foreach($customers as $customer)
    
   <tr>
      <th scope="row">{{$count ++}}</th>
      <td><a href="/customers/{{$customer->id}}">{{$customer->name}}</a></td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->active ? "active": "inactive"}}</td>
      <td>{{$customer->company->name}}</td>
      <td class=" input-group">
        <a href="/customers/{{$customer->id}}/edit" class="btn btn-sm btn-warning mr-1">Edit</a>
      <form action="/customers/{{$customer->id}}" method="post">
        @method('DELETE')
        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
        @csrf
      </form>
    </tr>
   @endforeach
    
  </tbody>
</table>
        </div>
    </div>

    <div class="row ">
      <div class="text-center d-flex justify-content-center ">{{$customers -> links()}}</div>
    </div>
</div>
@endsection