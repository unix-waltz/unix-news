<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
#section-detail{
  width: 50% !important;
}
.box-hero img {
	width: 100%;
	height: auto;
}
.box-hero {
	display: flex;
	position: relative;
	border-radius: 1em;
	width: 90%;
	height: 30em;
	overflow: hidden;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5vh;
}
.box-hero img {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	object-fit: cover;
	object-position: center;
	height: 100%;
	
}
.box-hero p {
	position: relative;
	margin: auto;
	text-transform: uppercase;
	font-weight: bold;
	font-size: 2em;
	color: #263238;
}

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
            @media (max-width: 576px) {
      footer .content .link-boxes {
        flex-direction: column;
      }
    }

    /* Media query untuk layar tablet */
    @media (min-width: 577px) and (max-width: 991px) {
      footer .content .link-boxes {
        flex-direction: row;
        flex-wrap: wrap;
      }
      footer .content .link-boxes .box {
        width: calc(50% - 20px);
        margin: 10px;
      }
    }
    .header {
  position: relative;
  width: 100%;
  height: 400px;
  padding: 15px 30px;
  border-radius: 10px;
  text-align: center;
  display: grid;
  place-items: center;
  margin-bottom: -60px;
}
.title {
  width: max-content;
  height: 20px;
}

.title__name {
  font-weight: 600;
  font-size: 50px;
  font-family: Frank Ruhl Libre;
}

.title__categories {
  margin-top: -25px;
  text-align:center;
  color: #aaa;
  font-weight: 400;
  font-size: 17.5px;
  display: flex;
  align-items: center;
  gap: 7.5px;
  font-family: Inter;
}

.categories__icon {
  font-size: 20;
  cursor: pointer;
}

.categories__item {
  cursor: pointer;
}

.categories__item:not(:last-child)::after {
  content: ",";
  pointer-events: none;
}
.categories__item{
  color: gray !important;
}
#body-x{
  width: 90%;
  margin-right: auto;
  margin-left: auto;
}

.stats {
  margin-top: 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 50px;
  height: 20px;
  position: relative;
  text-align: left;
}

.stat__name {
  display: block;
  text-transform: uppercase;
  color: #aaa;
  font-weight: 400;
  font-family: Inter;
}

.stat__value {
  display: block;
  margin-top: -15px;
  font-size: 35px;
}

.stats__divider {
  position: relative;
  display: inline-block;
  top: -10px;
  width: 2px;
  height: 35px;
  background-color: rgba(0, 0, 0, 0.075);
  border-radius: 5px;
}

</style>
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
