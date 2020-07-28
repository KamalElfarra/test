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
      <th scope="col">العنوان</th>
      <th scope="col">الإسم</th>
      <th scope="col">الملف</th>

    </tr>
  </thead>
  <tbody>
   
    <?php $i=1;?>
    @foreach ($file as $fi)
      <tr>
        <th scope="row"><?php echo $i++;?></th>  
        <td>
          <a class="open_dialog " data-toggle="modal" title="حذف الملف" href="/download/delete/{{ $fi->id }}"  data-target="#delete_project_modal"><i class="fas fa-trash-alt"></i></a>
          <a style="margin-left: 5px"  title="تعديل الملف" href="/download/edit/{{ $fi->id }}"><i class="fas fa-edit"></i></a>

      </td>  
      
        <td>{{ $fi->title }}</td>
        <td>{{ $fi->name }}</td>
        <td><a href="/{{ $fi->file }}">{{ $fi->file }}</a></td>

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