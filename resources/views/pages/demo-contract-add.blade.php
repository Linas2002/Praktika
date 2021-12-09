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
<form action="storeContract" method="POST"  enctype="multipart/form-data">
@csrf
@include("_partials/errors")
    <div class="form-group">
        <label for="clientID">Kliento ID</label>
        <input type="text" class="form-control" id="clientID" name="clientID">
    </div>
    
    <div class="form-group">
        <label for="deviceS">Įrenginio S/N</label>
        <input type="text" class="form-control" id="deviceS" name="deviceS">
    </div>

    <div class="form-group">
        <label for="loanstart">Skolinimo pradžia </label>
        <input type="date" class="form-control" id="loanstart" name="loanstart">
    </div>

    <div class="form-group">
        <label for="loandays">Skolinama dienų</label>
        <input type="text" class="form-control" id="loandays" name="loandays">
    </div>

    <div class="form-group">
        <label for="loanend">Sutarties užbaigimas</label>
        <input type="date" class="form-control" id="loanend" name="loanend">
    </div>

    <button type="submit mb-4" class="btn btn-primary">Ivesti</button>
</form>
@endsection