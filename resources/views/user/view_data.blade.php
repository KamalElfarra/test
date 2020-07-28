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
      <th scope="col">الإيميل</th>
      <th scope="col">آخر تحديث</th>


    </tr>
  </thead>
  <tbody>
   
    <?php $i=1;?>
    @foreach ($users as $user)
      <tr>
        <th scope="row"><?php echo $i++;?></th>  
        <td>
            <a href="/user/delete/{{ $user->id }}" title="حذف المستخدم"  data-target="#delete_project_modal"><i class="fas fa-trash-alt"></i></a>
        <a style="margin-left: 5px"  title="تعديل المستخدم" href="/user/edit/{{$user->id}}"><i class="fas fa-edit"></i></a>
        </td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->updated_at}}</td>
          
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