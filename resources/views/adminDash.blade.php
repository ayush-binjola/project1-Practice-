@extends('layouts.app')
@section('content')


<div class="container">
    <h1>This is Admin page</h1>
<div class="col"></div>
<div class="col"></div>
<div class="col">
    <table class="table table-condensed">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($values as $value )


          <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>

            <td>{{$value->email}}</td>
            <td>{{$value->role_name}}</td>
            <td> <a href={{"/admin/edit/". $value->id }}>
                Edit
              </a></td>
            <td><a href={{"/admin/delete/". $value->id }}>
                Delete
              </a></td>
          </tr>
          @endforeach
        </tbody>
      </table>


</div>
<div class="col"></div>
<div class="col"></div>


</div>


@endsection
