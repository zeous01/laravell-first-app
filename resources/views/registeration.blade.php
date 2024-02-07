@extends('layout')
@section('title', 'registeration')
@section('content')
<div class="container">

  <div class="mt-5">

    @if ($errors->any())
    <div class="col-12">
      @foreach($errors->all() as $error)
      <div class="alert alert-danger">
        {{$error}}
      </div>
      @endforeach
    </div>
        
    @endif

    @if (session()->has ('error'))
    <div class="alert alert-danger">
      {{session('error')}}
    </div>
        
    @endif

    @if (session()->has ('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
        
    @endif
  </div>

<form action="{{route('registeration.post')}}" method="POST" class="ms-auto me-auto mt-3" style = "width : 500px">
  @csrf
  <div class="mb-3">
    <label class="form-label">Full Name</label>
    <input type="text" class="form-control" name="name">
    
  </div>

  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Register</button>
</form>

</div>
@endsection