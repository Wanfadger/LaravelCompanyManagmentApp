@component('mail::message')
<h1>Thanks for creating an account with us</h1>
  <strong>from {{$customer['name']}}</strong>
  <br>
  <p>name: {{$customer['name']}}</p>
  <div>
      {{$customer['message']}}
  </div>
@endcomponent
