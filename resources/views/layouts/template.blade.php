<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>