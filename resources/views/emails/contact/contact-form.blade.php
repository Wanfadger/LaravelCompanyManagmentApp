@component('mail::message')
  <strong>from {{$data['name']}}</strong>
  <br>
  <p>name: {{$data['name']}}</p>
  <div>
      {{$data['message']}}
  </div>
@endcomponent
