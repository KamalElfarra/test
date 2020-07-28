@extends('dashboard.panel')
@section('conection')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

        <div class="card-header">

        </div>

    <div class="card-body">
   
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">الأيقونة</th>
      <th scope="col">الإسم</th>
      <th scope="col">العنوان</th>
      <th scope="col">الموضوع</th>

    </tr>
  </thead>
  <tbody>
   
    <?php $i=1;?>
    @foreach ($posts as $post)
      <tr>
        <th scope="row"><?php echo $i++;?></th>  
        <td>
        <a href="/post/delete/{{$post->id}}" title="حذف المنشور"  data-target="#delete_project_modal"><i class="fas fa-trash-alt"></i></a>
        <a style="margin-left: 5px"  title="تعديل المنشور" href="/post/edit/{{$post->id}}"><i class="fas fa-edit"></i></a>

      </td>
        <td>{{ $post->name }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->small_text }}</td>

     

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