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
      <th scope="col">الأيقونة</th>
      <th scope="col">الإسم</th>

    </tr>
  </thead>
  <tbody>
   
    <?php $i=1;?>
     @foreach ($categories as $category)
      <tr>
        <th scope="row"><?php echo $i++;?></th>  
        <td>
          <a href="/category/delete/{{$category->id}}" title="حذف القسم"  data-target="#delete_project_modal"><i class="fas fa-trash-alt"></i></a>
        <a style="margin-left: 5px"  title="تعديل القسم" href="/category/edit/{{$category->id}}"><i class="fas fa-edit"></i></a>

      </td>  
        <td>{{ $category->name }}</td>
        
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