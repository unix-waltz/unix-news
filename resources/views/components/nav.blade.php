

<nav class="navbar navbar-expand-lg" id ="section">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <img src="{{ asset('icon.png')}}"  width="170" height="auto" class="d-inline-block align-text-top">
    
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{$active == 'home' ? 'active' : ''}}"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{$active == 'news' ? 'active' : ''}}"  href="/news">News</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{$active == 'category' ? 'active' : ''}}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Lihat
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/Authors">Author</a></li>
              <li><a class="dropdown-item" href="/Category">Category</a></li>
      
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{$active == 'about' ? 'active' : ''}}" href="/about" aria-disabled="true">About Us</a>
          </li>
          <li class="nav-item"> 
          </li>
        </ul>
   <form class="d-flex" role="search" method="get" action="/news">
          <input name="q" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{request('q')}}">
          <button class="btn btn-outline-text-success" type="submit">
              <i class="fas fa-search"></i> 
          </button>
      </form>
      @auth
      <form action="/logout" method="post">
        @csrf
        @method('post')
      <ul class="list-unstyled navbar-nav mr-5 mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        &nbsp;Logout
          </a>
          <ul class="dropdown-menu">
            <li><button type="submit" class="dropdown-item" >Logout</button></li>
          </ul>
        </li>
      </ul>
    </form>
     @else
      <ul class="list-unstyled navbar-nav mr-5 mb-2 mb-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      &nbsp;  <i class="bi bi-box-arrow-in-right fs-5"></i>
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/login">Login</a></li>
          <li><a class="dropdown-item" href="/register">Register</a></li>
        </ul>
      </li>
    </ul>
    @endauth
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
    </div>
  </nav>

  