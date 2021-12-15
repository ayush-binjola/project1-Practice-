@extends('layouts.app')
@section('content')

<div class="container">
<div class="col"></div>
<div class="col">
    <h1>Update User</h1>
    <form action="/admin/update">
        <input type="hidden" name="id" value="{{$values->id}}" >
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$values->name }}">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$values->email }}" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
<div class="col"></div>
<div class="col"></div>
</div>

@endsection
