@extends('dashboard.panel')
@section('conection')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

    <div class="card-body">
   
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">small_text</th>
      <th scope="col">photo</th>

    </tr>
  </thead>
  <tbody>
   
    @foreach ($posts as $post)
      <tr>
        <th scope="row">1</th>  
        <td>{{ $post->name }}</td>
        <td>{{ $post->title }}</td>
      <td><img width="70" height="70" src="/{{$post->photo}}"/></td>

      </tr> 
    @endforeach
   
   
   
  </tbody>
</table>

    
    </div>

            </div>

        </div>

    </div>

</div>


@endsection