<br>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($mypost_datapost as $p )
      <tr>
        <th>{{$loop->iteration}}</th>
        <td>{{$p->title}}</td>
        <td>{{$p->category->category_name}}</td>
        <td>
            {{-- preview --}}
            <a href="/dashboard/post/preview/{{$p->slug}}?page=detailPost" class="btn"><i class="bi bi-easel"></i>&nbsp;Detail</a>
            {{-- edit --}}
            <a href="/dashboard/post/preview/{{$p->slug}}?page=editPost" class="btn"><i class="bi bi-pen"></i>&nbsp;Edit</a>
            {{-- hapus --}}
            <a href="/dashboard/post/hapus/{{$p->slug}}" class="btn"><i class="bi bi-trash2"></i>&nbsp;Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  