<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About us</title>
    <link rel="stylesheet" href="{% static 'about.css' %}" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
    <link rel="icon" href="{% static 'PICO-LOGO-SHORT.png' %}" type="image/gif">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
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
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  min-height: 100vh;
}

/* -----------------company----------------------- */
.company {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}

.company-info {
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.img {
  width: 100%;
  margin: 1rem 0rem 0rem 2rem;
}

.img img {
  width: 100%;
}

.company-info {
  width: 100%;
  margin-right: 4rem;
}

.company-info span {
  font-size: 2.5rem;
  font-weight: bold;
}

.company-info span .our {
  color: #00ADB5;
}

.company-info p{
  font-size: 1.1rem;
}
/* ----------------------------------------------- */

.team {
  display: flex;
  justify-content: center;
}

.team span {
  font-size: 2.5rem;
  font-weight: bold;
  border-bottom: 4px solid #00ADB5;
}

.container {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}

.card {
  position: relative;
  background: #fff;
  max-width: 350px;
  width: 350px;
  margin: 20px;
  border-radius: 2px;
  box-shadow: 0 5px 25px rgb(1 1 1 / 10%);
}

.card-image {
  max-height: 50vh;
  overflow: hidden;
}

.card-image img {
  max-width: 100%;
  height: auto;
  visibility: hidden;
}

.card-title span {
  visibility: hidden;
}

.yellow-surname {
  color: #00ADB5;
}

.card-description span {
  visibility: hidden;
}

.card-mediaIcons a i {
  visibility: hidden;
}

.card-info {
  position: relative;
  color: #222;
  padding: 20px;
}

.card-info h3 {
  font-size: 1.4em;
  font-weight: 700;
  margin-bottom: 10px;
}

.card-info h4 {
  font-size: 1rem;
  font-weight: normal;
}

.card-info a {
  text-decoration: none;
  color: navy;
}

.card-info p {
  font-size: 1em;
  margin-bottom: 15px;
}

.card-info .card-mediaIcons {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

.card-info .card-mediaIcons a {
  color: #999;
  font-size: 1.4em;
  margin: 0 10px;
  width: 40px;
  height: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
  border-radius: 50%;
  transition: color 0.3s ease;
}

.card-info .card-mediaIcons a:hover {
  color: #222;
}

.card-mediaIcons a img {
  width: 40px;
}

.loading {
  position: relative;
  background: #e2e2e2;
  overflow: hidden;
}

.loading:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 255, 255, 0.2),
    transparent
  );
  transform: translateX(-100%);
  animation: loading 1.5s infinite;
}

.info {
  font-size: 1.2rem;
  font-weight: 500;
}

@keyframes loading {
  100% {
    transform: translateX(100%);
  }
}

/* ------------------------------footer---------------------------------------- */
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
.content .top .media-icons {
  display: flex;
}
.content .top .media-icons a {
  height: 40px;
  width: 40px;
  margin: 0 8px;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  color: #fff;
  font-size: 17px;
  text-decoration: none;
  transition: all 0.4s ease;
}
.top .media-icons a:nth-child(1) {
  background: #4267b2;
}
.top .media-icons a:nth-child(1):hover {
  color: #4267b2;
  background: #fff;
}

.top .media-icons a:nth-child(2) {
  background: #e1306c;
}
.top .media-icons a:nth-child(2):hover {
  color: #e1306c;
  background: #fff;
}

footer .content .link-boxes {
  width: 100%;
  display: flex;
  justify-content: space-between;
}
footer .content .link-boxes .box {
  width: calc(100% / 5 - 10px);
}
.content .link-boxes .box .link_name {
  color: black;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 10px;
  position: relative;
}
.link-boxes .box .link_name::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -2px;
  height: 2px;
  width: 35px;
  background: #00ADB5;
}
.content .link-boxes .box li {
  margin: 6px 0;
  list-style: none;
}
.content .link-boxes .box li a {
  color: black;
  font-size: 14px;
  font-weight: 400;
  text-decoration: none;
  opacity: 0.8;
  transition: all 0.4s ease;
}
.content .link-boxes .box li a:hover {
  opacity: 1;
  text-decoration: underline;
}
.content .link-boxes .input-box {
  margin-right: 55px;
}
.link-boxes .input-box input {
  height: 40px;
  width: calc(100% + 55px);
  outline: none;
  border: 2px solid #afafb6;
  background: #140b5c;
  border-radius: 4px;
  padding: 0 15px;
  font-size: 15px;
  color: #fff;
  margin-top: 5px;
}
.link-boxes .input-box input::placeholder {
  color: #afafb6;
  font-size: 16px;
}
.link-boxes .input-box input[type="button"] {
  background: #fff;
  color: #140b5c;
  border: none;
  font-size: 18px;
  font-weight: 500;
  margin: 4px 0;
  opacity: 0.8;
  cursor: pointer;
  transition: all 0.4s ease;
}
.input-box input[type="button"]:hover {
  opacity: 1;
}
footer .bottom-details {
  width: 100%;
  background: #000;
  border-top: 0.5px solid #fff;
}
footer .bottom-details .bottom_text {
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

/* ------------------------------------------media-footer------------------------------------------- */
@media (max-width: 900px) {
  .company-info {
    width: 100%;
    margin-right: 0rem;
    margin-left: 1rem;
  }
  .company-info p{
    margin-right: 2rem;
    text-align: center;
  }
  .company-info span {
    font-size: 1.7rem;
    font-weight: bold;
    text-align: center;
  }
  .team {
    display: flex;
    justify-content: center;
  }

  .team span {
    font-size: 1.7rem;
    font-weight: bold;
  }
  .company {
    display: flex;
    flex-direction: column;
  }
  .img {
    margin-left: 0rem;
  }
  footer .content .link-boxes {
    flex-wrap: wrap;
  }
  footer .content .link-boxes .input-box {
    width: 40%;
    margin-top: 10px;
  }
}
@media (max-width: 700px) {
  footer {
    position: relative;
  }
  .content .top .logo-details {
    font-size: 26px;
  }
  .content .top .media-icons a {
    height: 35px;
    width: 35px;
    font-size: 14px;
    line-height: 35px;
  }
  footer .content .link-boxes .box {
    width: calc(100% / 3 - 10px);
  }
  footer .content .link-boxes .input-box {
    width: 60%;
  }
  .bottom-details .bottom_text span,
  .bottom-details .bottom_text a {
    font-size: 12px;
  }
}
@media (max-width: 520px) {
  footer::before {
    top: 145px;
  }
  footer .content .top {
    flex-direction: column;
  }
  .content .top .media-icons {
    margin-top: 16px;
  }
  footer .content .link-boxes .box {
    width: calc(100% / 2 - 10px);
  }
  footer .content .link-boxes .input-box {
    width: 100%;
  }
}
@media(max-width:320px){
  .company-info p{
    margin-right: 0rem;
  }
}
hr{
    margin-left: auto;
    margin-right: auto;
    width: 30%;
    color: gray;

}
    </style>
  </head>
  
  <body>
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
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-text-success" type="submit">
                  <i class="fas fa-search"></i> 
              </button>
          </form>
          
          </div>
        </div>
      </nav>
    <div class="company">
      <div class="img">
        <img src="{{asset('logo.png')}}" alt="" class="logo"/>
      </div>
      <div class="company-info">
        <span>NEWS <span class="our">FOR EVERYONE</span></span>
        <p>
          <b>UNIXNEWS</b> The Indonesia-based website is devoted to providing the latest news under a comprehensive coverage. Our platform enables journalists to publish news articles, which are subsequently reviewed by a team of experienced editors. At our core, we strive to become one of the prominent sources of news content on the internet.
        </p>
      </div>
    </div>
    <!-- ---------------------------------------------------------------------------------------------------------------------- -->
    <!-- ----------------------------------------------------team-------------------------------------------------------------- -->
    <div class="team"><span>OUR TEAM</span></div>
    <div class="container">
      <div class="card">
        <div class="card-image loading"><img src="{{asset('logo-open-ai.png')}}" alt="" /></div>
        <div class="card-info">
          <h3 class="card-title loading"><span>Yash <span class="yellow-surname">Falke</span></span></h3>
          <p class="card-description loading">
            <span class="personal-info">
              <span class="info">Graphic Designing Head</span> <br>
              Pursuing IT Engineering (VIT Mumbai) <br>
              Email: <a href="mailto:'yashfalke77@gmail.com'">yashfalke77@gmail.com</a>
            </span>
          </p>
          
        </div>
      </div>
      <div class="card">
        <div class="card-image loading"><img src="{{asset('logo-open-ai.png')}}" alt="" /></div>
        <div class="card-info">
          <h3 class="card-title loading"><span>Yash <span class="yellow-surname">Falke</span></span></h3>
          <p class="card-description loading">
            <span class="personal-info">
              <span class="info">Graphic Designing Head</span> <br>
              Pursuing IT Engineering (VIT Mumbai) <br>
              Email: <a href="mailto:'yashfalke77@gmail.com'">yashfalke77@gmail.com</a>
            </span>
          </p>
          
        </div>
      </div>
      <div class="card">
        <div class="card-image loading"><img src="{{asset('logo-open-ai.png')}}" alt="" /></div>
        <div class="card-info">
          <h3 class="card-title loading"><span>Yash <span class="yellow-surname">Falke</span></span></h3>
          <p class="card-description loading">
            <span class="personal-info">
              <span class="info">Graphic Designing Head</span> <br>
              Pursuing IT Engineering (VIT Mumbai) <br>
              Email: <a href="mailto:'yashfalke77@gmail.com'">yashfalke77@gmail.com</a>
            </span>
          </p>
          
        </div>
      </div>
    </div>
    <hr align="center">

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
  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </footer>
<script>
    const cardImages = document.querySelectorAll(".card-image");
const cardTitles = document.querySelectorAll(".card-title");
const cardDescriptions = document.querySelectorAll(".card-description");
const cardMediaIcons = document.querySelectorAll(".card-mediaIcons a");
const cardImgs = document.querySelectorAll(".card-image img");
const cardTitleSpans = document.querySelectorAll(".card-title span");
const cardDescSpans = document.querySelectorAll(".card-description span");
const mediaIcons = document.querySelectorAll(".card-mediaIcons a i");

const renderCard = () => {
  //Remove the skeleton loading effect
  cardImages.forEach((cardImage) => {
    cardImage.classList.remove("loading");
  });
  cardTitles.forEach((cardTitle) => {
    cardTitle.classList.remove("loading");
  });
  cardDescriptions.forEach((cardDescription) => {
    cardDescription.classList.remove("loading");
  });
  cardMediaIcons.forEach((cardMediaIcon) => {
    cardMediaIcon.classList.remove("loading");
  });

  //Show the hidden html elements
  cardImgs.forEach((cardImg) => {
    cardImg.style.visibility = "visible";
  });
  cardTitleSpans.forEach((cardTitleSpan) => {
    cardTitleSpan.style.visibility = "visible";
  });
  cardDescSpans.forEach((cardDescSpan) => {
    cardDescSpan.style.visibility = "visible";
  });
  mediaIcons.forEach((mediaIcon) => {
    mediaIcon.style.visibility = "visible";
  });
}

//Execute renderCard on setTimeout
setTimeout(() => {
  renderCard();
}, 1000);

//Execute renderCard after the page loaded
//window.addEventListener("load", () => {
  //renderCard();
//});

  
</script>
  </body>
  </html>