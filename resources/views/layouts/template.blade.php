<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('style.css')}}">
  </head>
  <body>
@include("components.nav")
@yield('content')
<section class="container mt-4">
   <br> <hr align="center">

    <br>    <footer>
          <div class="content">
            <div class="top">
              <div class="logo-details">
                <span class="logo_name">UNIXNEWS</span>
              </div>
                {{-- <div class="media-icons">
                    <i class="fab fa-github"></i> <!-- Ikon GitHub -->
                  </div> --}}
              
            </div>
            <div class="container">
            <div class="link-boxes">
              <ul class="box">
                <li class="link_name">Links</li>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
      
              </ul>
              <ul class="box">
                <li class="link_name">Recommended</li>
                <li><a href=""">India</a></li>
                <li><a href=""">Art and Culture</a></li>
                <li><a href="">People</a></li>
                <li><a href=""">Travel</a></li>
      
              </ul>
              <ul class="box">
                <li class="link_name">Legal Info</li>
                <li><a href="">Licence</a></li>
                <li><a href="">Terms and Conditions</a></li>
                <li><a href="">Privacy Policies</a></li>
      
              </ul>
              <ul class="box">
                <li class="link_name">Contact</li>
                <li><a target="on_blank" href="tel:+919079680135">+91 9079680135</a></li>
                <li><a target="on_blank" href="mailto:connectpicoindia@gmail.com">contactpicoindia@gmail.com</a></li>
              </ul>
            </div>
          </div>
          </div>
      
        
          </div>
        </footer>
        <hr align="center">
</section>
        <br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
  </body>
