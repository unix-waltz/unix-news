@php
    $id = (int)$_GET['id'];
    $category = App\Models\Category::all();
    $data = App\Models\News::find($id);
@endphp
<form action="{{route('editM')}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    <input type="hidden" name="id" value="{{$id}}">
<div class="container">
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="exampleFormControlInput1" value="{{$data->title}}" required>
    @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
 
      <label for="categories" class="form-label">Select Category</label>
      <select class="form-select " name="category_id" id="categories" aria-label="Default select example">
        @foreach ($category as $c )
            <option value="{{$c->id}}">{{$c->category_name}}</option>
        @endforeach
      </select>
      <br>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Excerpt  (100 - 300 words)</label>
        <input class="form-control  @error('excerpt') is-invalid @enderror" id="exampleFormControlTextarea1" name="excerpt" value="{{$data->excerpt}}" rows="3" required></input>
        @error('excerpt')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label  @error('thumb') is-invalid @enderror">thumbnail</label>
        <input class="form-control" name="thumb" type="file" id="formFile">
        <input type="hidden" name="old_thumb" value="{{$data->thumb}}">
        @error('thumb')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
      </div> 
<br>
<input id="" type="hidden" name="slug" >
      <label for="x" class="form-label @error('body') is-invalid @enderror">Content </label>
      <input id="x" type="hidden" value="{{$data->body}}" name="body" >
      <trix-editor input="x" ></trix-editor>
      @error('body')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
  @enderror
      <br>
<button type="submit" class="btn btn-dark"><i class="bi bi-plus-lg fs-5"></i>&nbsp;&nbsp;Create New Post</button>
</div>
</form>
