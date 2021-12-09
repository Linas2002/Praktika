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
<div class="container" style="margin-top: 20%;">
    <div class="text-center">
        <div class="row">
            <div class="col-sm-4">
                <a class="btn btn-success p-3" href="/demo-device-add" role="button">Demo įrenginio įvedimas</a>
            </div>
            <div class="col-sm-4">
                <a class="btn btn-success p-3" href="/demo-contract-add" role="button">Demo sutarties įvedimas</a>
            </div>
            <div class="col-sm-4">
                <a class="btn btn-success p-3" href="/demo-contract-check" role="button">Demo sutarčių peržiūra</a>
            </div>
        </div>
    </div>
</div>

@endsection