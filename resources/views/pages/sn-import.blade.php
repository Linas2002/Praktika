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
<form class='mx-auto' , style="width: 350px;" >
  <div class="form-group">
    <input type="file" class="form-control" id="file" name="file">
  </div>
  <button type="submit" class="btn btn-primary">Įvesti</button>
</form>
@endsection