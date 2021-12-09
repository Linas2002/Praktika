@extends('main')
@section('content')
<style>
body{
    background-image: url('https://images.ctfassets.net/hrltx12pl8hq/1d5gYiyEQq5Ry9HjHqldlH/40754c8fdbb55a238d8774801f27d7c6/06-nature_535318603.jpg?fit=fill&w=480&h=270');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-attachment: fixed;
}
 </style>

  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">phone</th>
      <th scope="col">DeviceP</th>
      <th scope="col">DeviceS</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
@foreach($bases as $base)
  <tbody class="border-0">
      <td> {{$base->id}} </td>
      <td> {{$base->title}}</td>
      <td> {{$base->phone}}</td>
      <td> {{$base->DeviceP}}</td>
      <td> {{$base->DeviceS}}</td>
      <td> {{$base->Description}}</td>
  </tbody>
@endforeach
</table>

@endsection 