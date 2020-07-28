@extends('dashboard.panel')
@section('conection')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

<form action="/contactpersonal/store" method="POST" enctype="multipart/form-data">

    @if($contacts->count()>0)

    <div class="card-body">

      {{ csrf_field() }}

    <div class="form-group">
      <label for="email">الإيميل</label>
      <input type="text" name="email" class="form-control" id="email"  value="{{ $contacts->email }}">
    </div>

    <div class="form-group">
        <label for="address">العنوان</label>
        <input type="text" name="address" class="form-control" id="address"  value="{{ $contacts->address }}">
    </div>

    <div class="form-group">
      <label for="phone">رقم الإتصال</label>
      <input type="text" name="phone" class="form-control" id="phone"  value="{{ $contacts->phone }}">
  </div>

    <input type="submit" class="btn btn-primary" value="save"/>

    </div>

        @else
            <p scope="row" class="text-center" style="color: mediumblue;">There Is No contact Founds!!</p>
        @endif

  </form>

            </div>

        </div>

    </div>

</div>


@endsection
