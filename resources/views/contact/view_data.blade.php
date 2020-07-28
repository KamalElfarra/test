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
      <th scope="col">الإيميل</th>
      <th scope="col"> الموضوع</th>
      <th scope="col">الرسالة</th>

    </tr>
  </thead>
  <tbody>
   
    <?php $i=1;?>
    @foreach ($contact as $cont)
      <tr>
        <th scope="row"><?php echo $i++;?></th>  
        <td>
             <a  href="/contact/delete/{{$cont->id}}" title="حذف التواصل"  data-target="#delete_project_modal"><i class="fas fa-trash-alt"></i></a>
       </td>  
      <td>{{$cont->name}}</td>
      <td>{{$cont->email}}</td>
      <td>{{$cont->subject}}</td>
      <td>
        
        <div class="comment more">

        {{$cont->message}}

        </div>

      </td>
      

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