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
      <th scope="col">Client ID</th>
      <th scope="col">Device Number</th>
      <th scope="col">Loan start</th>
      <th scope="col">Loan days</th>
      <th scope="col">Loan end</th>
    </tr>
  </thead>
@foreach($contracts as $contract)
  <tbody class="border-0">
      <td> {{$contract->clientID}} </td>
      <td> {{$contract->deviceS}}</td>
      <td> {{$contract->loanstart}}</td>
      <td> {{$contract->loandays}}</td>
      <td> {{$contract->loanend}}</td>
  </tbody>
@endforeach
</table>


@endsection


