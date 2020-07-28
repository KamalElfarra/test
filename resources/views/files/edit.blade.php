@extends('dashboard.panel')
@section('conection')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

    <form action="/download/update/{{$edit->id}}" method="POST" enctype="multipart/form-data">

    <div class="card-body">

      {{ csrf_field() }}

    <div class="form-group">
        <label for="title">title</label>
        <input type="text" name="title" class="form-control" id="title"  value="{{ $edit->title }}">
      </div>

      
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="name"  value="{{ $edit->name }}">
    </div>


    <form>
        <div class="form-group">
          <label for="file">file</label>
          <input type="file" name="file" class="form-control-file" id="file">
        </div>
    </form>

    <input type="submit" class="btn btn-primary" value="save"/>

    </div>

  </form>

            </div>

        </div>

    </div>

</div>


@endsection
