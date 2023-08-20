<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
footer {
  background: white;
  width: 100%;
  bottom: 0;
  left: 0;
}

footer .content {
  max-width: 1250px;
  margin: auto;
  padding: 30px 40px 40px 40px;
}

footer .content .top {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 50px;
}

.content .top .logo-details {
  color: #00ADB5;
  font-size: 30px;
}

/* ... */
hr{
    margin-left: auto;
    margin-right: auto;
    width: 30%;
    color: gray;

}
footer .content .link-boxes {
  width: 100%;
  display: flex;
  justify-content: space-between;
}

footer .content .link-boxes .box {
  width: calc(100% / 5 - 10px);
}

/* ... */

.footer .bottom-details {
  width: 100%;
  background: #000;
  border-top: 0.5px solid #fff;
}

.footer .bottom-details .bottom_text {
  max-width: 1250px;
  margin: auto;
  padding: 20px 40px;
  display: flex;
  justify-content: space-between;
}

.bottom-details .bottom_text span,
.bottom-details .bottom_text a {
  font-size: 14px;
  font-weight: 300;
  color: #fff;
  opacity: 0.8;
  text-decoration: none;
}

.bottom-details .bottom_text a:hover {
  opacity: 1;
  text-decoration: underline;
}

.bottom-details .bottom_text a {
  margin-right: 10px;
}

.category-link {
    display: block; 
    text-decoration: none; 
    color: inherit; 
}
#section{
    box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;

}
a{
  text-decoration: none;
  color: black;
}
  .category-box {
            border-radius: 10px;
            border: 1px solid #e0e0e0;
            padding: 10px;
            margin: 10px;
            transition: background-color 0.3s, color 0.3s;
        }
        .category-box:hover {
            background-color: #f4f4f4;
            color: #333;
        }

        .video-thumbnail {
                width: 100%;
                height: auto;
            }
            .video-title {
                font-size: 1.2rem;
                margin-top: 0.5rem;
            }
            .video-description {
                color: #6c757d;
            }
            .video-card {
                margin-bottom: 1rem;
            }
   
</style>
  </head>
  <body>
@include("components.nav")
@yield('content')
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
                <li><a target="on_blank" href="mailto:'connectpicoindia@gmail.com'">contactpicoindia@gmail.com</a></li>
              </ul>
            </div>
          </div>
          </div>
      
        
          </div>
        </footer>
        <hr align="center">

        <br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
  </body>
</html>