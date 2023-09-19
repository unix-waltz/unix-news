<div class="container">
    <div class="row" id="body-x">
        <h4>Judul : </h4><h1>{{$post->title}}</h1>
        <div class="col-sm text-secondary">
<p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<h6  class="text-secondary">
           <small class="text-body-secondary">Upload : {{$post->created_at->diffForHumans()}}&nbsp;</small>| Category  :
           {{$post->category->category_name}}
</h6>
</p>
        </div>
       
    </div>
    
    <div class="box-hero">
        
        <img src="{{asset('/storage/ThumbPost/'.$post->thumb)}}" alt="Image de naruto usada de fondo">
        <p></p>
    </div>
    <div class="container m-4">
        <div class="container" id="body-x">
            
 <p class="fs-4">   <?= $post->body ?></p>
</div>
    </div>
    </div>