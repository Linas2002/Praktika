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

<form action="storeClient" method="POST"  enctype="multipart/form-data">
    @csrf
    @include("_partials/errors")

  <div class="form-group">
    <label for="identify">Title</label>
    <input type="text" class="form-control" id="identify" name="identify">
  </div>
  
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address">
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>

  <div class="form-group">
    <label for="gmail">Gmail</label>
    <input type="email" class="form-control" id="gmail" name="gmail">
  </div>

  <div class="form-group">
    <label for="personalContact">personal Contact</label>
    <input type="text" class="form-control" id="personalContact" name="personalContact">
  </div>

  <div class="form-group">
    <label for="contactPhone">contact Phone</label>
    <input type="text" class="form-control" id="contactPhone" name="contactPhone">
  </div>

  <div class="form-group">
    <label for="note">Notes</label>
    <textarea class="form-control" id="note" name="note" rows="3"></textarea>
  </div>

  
  <button type="submit mb-4" class="btn btn-primary">Ivesti</button>
</form>
@endsection