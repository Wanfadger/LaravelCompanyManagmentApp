@extends('layout.layout')
@section('title' , 'contact-us')

@section('main-content')

<div class="container">
 @if(session()->has('message'))
 <div class="alert alert-success" role="alert">
   <strong>success</strong> {{session()->get("message")}}
</div>
 @endif
    <div class="row">
        <div class="col-sm-8">
        
        <form action="#" method="post">

        <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="name">
    <small id="email" class="form-text text-muted">{{ $errors->first('name')}}</small>
  
  </div>
 
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="enter email" name="email">
    <small id="email" class="form-text text-muted">{{ $errors->first('email')}}</small>
  </div>
  

  <div class="form-group">
    <label for="message">message</label>
  <textarea name="message" id="message" cols="10" rows="5" class=" form-control" name="message" ></textarea>
  <small id="email" class="form-text text-muted">{{ $errors->first('message')}}</small>
  
  </div>

  <button type="submit" class="btn btn-primary">Send message</button>
  @csrf
</form>
        </div>
    </div>
</div>

@endsection