@extends('dashboard.panel')
@section('conection')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

<form action="/setting/store" method="Post" enctype="multipart/form-data">


    @if($firsts->count()>0)

    <div class="card-body">

      {{ csrf_field() }}

    <div class="form-group">
      <label for="name">الإسم</label>
      <input type="text" name="name" class="form-control" id="name"  value="{{ $firsts->name }}">
    </div>

      <div class="form-group">
        <label for="title">العنوان</label>
        <input type="text" name="title" class="form-control" id="title"  value="{{ $firsts->title }}">
      </div>

    <form>
        <div class="form-group">
          <label for="photo">الصورة</label>
          <input type="file" name="photo" class="form-control-file" id="photo">
        </div>
      </form>

    <input type="submit" class="btn btn-primary" value="save"/>

    </div>

    @else
        <p scope="row" class="text-center" style="color: mediumblue;">There Is No setting Founds!!</p>
    @endif


</form>

            </div>

        </div>

    </div>

</div>


@endsection
