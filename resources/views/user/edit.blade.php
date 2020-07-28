@extends('dashboard.panel')
@section('conection')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

    <form action="/user/update/{{$edit->id}}" method="POST" >

    <div class="card-body">

      {{ csrf_field() }}

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="name"  value="{{ $edit->name }}">
    </div>

    <div class="form-group">
        <label for="email">email</label>
        <input type="text" name="email" class="form-control" id="email"  value="{{ $edit->email }}">
      </div>

    <input type="submit" class="btn btn-primary" value="save"/>

    </div>

  </form>

            </div>

        </div>

    </div>

</div>


@endsection
