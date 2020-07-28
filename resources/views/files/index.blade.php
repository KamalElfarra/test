@extends('dashboard.panel')
@section('conection')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

<form action="/download/store" method="POST" enctype="multipart/form-data">

    <div class="card-body">

      {{ csrf_field() }}

    
      <div class="form-group">
        <label for="title">العنوان</label>
        <input type="text" name="title" class="form-control" id="title"  placeholder="أدخل العنوان">
      </div>

      <div class="form-group">
        <label for="name">الإسم</label>
        <input type="text" name="name" class="form-control" id="name"  placeholder="أدخل الإسم">
      </div>

      
    <form>
        <div class="form-group">
          <label for="file">الملف</label>
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
