@extends('dashboard.panel')
@section('conection')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form action="/blog/store" method="POST" enctype="multipart/form-data">

                        <div class="card-body">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name">الإسم</label>
                                <input type="text" name="name" class="form-control" id="name"  placeholder="أدخل الإسم">
                            </div>

                            <div class="form-group">
                                <label for="title">العنوان</label>
                                <input type="text" name="title" class="form-control" id="title"  placeholder="أدخل العنوان">
                            </div>

                            <div class="form-group">
                                <label for="small_text">الموضوع</label>
                                <textarea class="form-control" name="contents" id="small_text" rows="3"></textarea>
                            </div>

                            <input type="submit" class="btn btn-primary" value="save"/>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>


@endsection
