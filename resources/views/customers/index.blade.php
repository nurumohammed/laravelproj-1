@extends('layouts.app')
@section('content')
<div class = "container">
    @include('messages')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($customers as $customer)
    <tr>
      <th scope="row">{{customer->id}}</th>
      <td>{{customer->name}}</td>
      <td>{{customer->email}}</td>
      <td>{{customer->phone}}</td>
      <td>
        <form action = "/customers/{{customer->id}}"method= = "POST">
            @method('DELATE')
            @csrf
            <a href = "/custemers/{{customer->id}}" class= "btn btn-success">View</a>
            <a href = "/custemers/{{customer->id}}/edit" class= "btn btn-success">Edit</a>
        <button type = "submit"class="btn btn-danger>
        </form>
      </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>

@endsection 
