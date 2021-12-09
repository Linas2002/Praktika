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
<div class="text-center">
<a class="btn btn-primary" href="/form" role="button">Prideti</a>
</div>
<table class="table table-sm table-dark">
  <thead>
    <tr class="col">
      <th>Id</th>
      <th>Title</th>
      <th>Address</th>
      <th>Phone</th>
      <th>Gmail</th>
      <th>Personal contact</th>
      <th>Contact phone</th>
      <th>Note</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $tables as $table )
    <tr class="col">
      <th>{{ $table->id }}</th>
      <th>{{ $table->identify }}</th>
      <th>{{ $table->address }}</th>
      <th>{{ $table->phone }}</th>
      <th>{{ $table->gmail }}</th>
      <th>{{ $table->personalContact }}</th>
      <th>{{ $table->contactPhone }}</th>
      <th>{{ $table->note }}</th>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection