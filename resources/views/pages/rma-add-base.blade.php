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
<form action="storeRma" method="POST"  enctype="multipart/form-data">
@csrf
@include("_partials/errors")
    <div class="form-group">
        <label for="title">Įmonės/fizinio asmens pavadinimas</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    
    <div class="form-group">
        <label for="phone">Telefono numeris</label>
        <input type="number" class="form-control" id="phone" name="phone">
    </div>

    <div class="form-group">
        <label for="DeviceP">Įrenginio P/N</label>
        <input type="text" class="form-control" id="DeviceP" name="DeviceP">
    </div>

    <div class="form-group">
        <label for="DeviceS">Įrenginio S/N</label>
        <input type="text" class="form-control" id="DeviceS" name="DeviceS">
    </div>

    <div class="form-group">
        <label for="Description">Gedimo aprašymas</label>
        <input type="text" class="form-control" id="Description" name="Description">
    </div>
    <button type="submit mb-4" class="btn btn-primary">Ivesti</button>
</form>
@endsection