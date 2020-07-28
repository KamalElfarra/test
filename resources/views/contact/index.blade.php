@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

<form action="/contact/store" method="POST">

    <div class="card-body">

      {{ csrf_field() }}

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="name"  placeholder="Enter the name">
    </div>

    <div class="form-group">
      <label for="email">email</label>
      <input type="text" name="email" class="form-control" id="email"  placeholder="Enter the email">
    </div>

      <div class="form-group">
        <label for="subject">subject</label>
        <textarea class="form-control" name="subject" id="subject" rows="1"></textarea>
      </div>


      <div class="form-group">
        <label for="message">message</label>
        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
      </div>

    <input type="submit" class="btn btn-primary" value="save"/>

    </div>

  </form>

            </div>

        </div>

    </div>

</div>


@endsection
