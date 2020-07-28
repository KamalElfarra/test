@extends('dashboard.panel')
@section('conection')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

    <form action="/post/update/{{$edit->id}}" method="POST" enctype="multipart/form-data">

    <div class="card-body">

      {{ csrf_field() }}

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="name"  value="{{ $edit->name }}">
    </div>

    <div class="form-group">
        <label for="title">title</label>
        <input type="text" name="title" class="form-control" id="title"  value="{{ $edit->title }}">
      </div>

      <div class="form-group">
        <label for="small_text">small_text</label>
        <textarea class="form-control" name="small_text" id="small_text" rows="3">{{ $edit->small_text }}</textarea>
      </div>


    {{-- <select name="category_id" class="custom-select" id="inputGroupSelect02">

      @foreach($category as $categories)

        @if ($categories->id == $edit->category_id)
            <option value="{{$categories->id}}" selected>{{ $categories->name }}</option>
        @else
            <option value="{{$categories->id}}">{{ $categories->name }}</option>
        @endif

      @endforeach

    </select> --}}


    {{-- <form>
        <div class="form-group">
          <label for="photo">photo</label>
          <input type="file" name="photo" class="form-control-file" id="photo">
        </div>
      </form> --}}

    <input type="submit" class="btn btn-primary" value="save"/>

    </div>

  </form>

            </div>

        </div>

    </div>

</div>


@endsection
