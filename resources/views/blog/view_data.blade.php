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
    @foreach ($post as $p)
      <tr>
        <th scope="row"><?php echo $i++;?></th>
        <td>
        <a href="/blog/delete/{{$p->id}}" title="حذف المنشور"  data-target="#delete_project_modal"><i class="fas fa-trash-alt"></i></a>
        <a style="margin-left: 5px"  title="تعديل المنشور" href="/blog/edit/{{$p->id}}"><i class="fas fa-edit"></i></a>

      </td>
        <td>{{$p->name}}</td>
        <td>{{$p->title}}</td>
        <td class="comment more">
            {{$p->contents}}
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
