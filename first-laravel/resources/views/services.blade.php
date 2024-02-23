<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <title>home</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .page-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
            padding: 20px;
            width: 100%;
            height: 100%;
            flex-direction: column;
        }
        body {
            width: 100%;
            background-image: url('banner18.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            height: 100%;
        }
        html {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .navbar {
            background-color: transparent !important;
        }
        
        .navbar-brand {
            color: #fff; 
        }
        
        .navbar-nav .nav-link {
            color: #fff; 
        }
        
        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link:hover {
            color: #000; 
        }
       
        .navbar-login-icon {
            color: #fff; 
            margin-left: auto; 
        }
        
        
        .navbar-nav .nav-link.home {
    color: #fff; 
    transition: color 0.3s; /* Add a smooth transition effect */
        }

        .navbar-nav .nav-link.home:hover {
            color: #000; /* Change to black on hover */
        }
    </style>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="home">Second Activity Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active home" aria-current="page" href="home">Home</a>
            <a class="nav-link" href="about">About Us</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="service1">Services 1</a></li>
                <li><a class="dropdown-item" href="service2">Services 2</a></li>
                <li><a class="dropdown-item" href="service3">Services 3</a></li>
              </ul>
            </li>
            <a class="nav-link" href="contact">Contact Us</a>
          </div>
          <a class="navbar-login-icon" href="login">
            <i class="bi bi-person"></i>
          </a>
        </div>
      </div>
    </nav>  
  </body>
</html>
