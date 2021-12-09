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
<form action="storeDevice" method="POST"  enctype="multipart/form-data">
@csrf
@include("_partials/errors")
    <div class="form-group">
        <label for="deviceP">Įrenginio P/N</label>
        <input type="text" class="form-control" id="deviceP" name="deviceP">
    </div>
    
    <div class="form-group">
        <label for="deviceS">Įrenginio S/N</label>
        <input type="text" class="form-control" id="deviceS" name="deviceS">
    </div>

    <div class="form-group">
        <label for="description">Įrenginio aprašymas</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <button type="submit mb-4" class="btn btn-primary">Ivesti</button>
</form>
@endsection