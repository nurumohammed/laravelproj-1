@extends('layouts.app')
@section('content')
<div class ="container">
<div class="card col-6 offset-3">
  <div class="card-header"> Edit customer </div>
  <div class="card-body">
  @include('messages')
    <form action = "/customers/{{$customer->id}}" method = "POST">
        @csrf
        @method('PUT')
    <div class="mb-3">
    <label  class="form-label">name</label>
    <input type="text" name= "name" class="form-control"  @error('name') is-invalid @enderror" value ="{{old('name')}}">
    @error('name')
       <span class = "text-danger">
          <strong>{{$message}}</strong>
       </span>
    @enderror

    <div class="mb-3">
    <label  class="form-label">email</label>
    <input type="text" name= "email" class="form-control"  @error('email') is-invalid @enderror" value ="{{old('email')}}">
    @error('email')
       <span class = "text-danger">
          <strong>{{$message}}</strong>
       </span>
    @enderror

    <div class="mb-3">
    <label  class="form-label">phone</label>
    <input type="text" name= "phone" class="form-control"  @error('phone') is-invalid @enderror" value ="{{old('phone')}}">
    @error('phone')
       <span class = "text-danger">
          <strong>{{$message}}</strong>
       </span>
    @enderror
  </div>
  <div class="mb-3">
    <button type = "submit" class = "btn btn-success">submit</button>
  </div>
         
    </form>
  
  </div>
</div>


</div>
@endsection