<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="/assets/control.css">
    <link rel="stylesheet" href="/assets/men.css">
    <script src="/assets/men.js"></script>
    
    <title>Pets</title>
</head>
<body>
    <header>
      <style>
        nav{
          height: 50px;
        }
        
        
      </style>
        <div class="container-fluid topnav" style="height: 50px;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="clientProfile" class=" ">My Profile</a></li>
                <li class="nav-item dropdown"><a href=" " class=" dropdown-toggle" id="navbarDropdown"role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a  class="dropdown-item" href="#">Men</a>
                    <a  class="dropdown-item" href="#">Women</a>
                    <a  class="dropdown-item" href="#">Children</a>
                    <a  class="dropdown-item" href="#">Pets</a>
                  </div>
                </li>
                <li class="nav-item dropdown"><a href="" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub-Category</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a  class="dropdown-item" href="#">Formal</a>
                    <a  class="dropdown-item" href="">Casual</a>
                    <a  class="dropdown-item" href="">Sports</a>
                   
                  </div>
                </li>
                <li class="nav-item"><a href="http://localhost/web_prac/stockcart1.php" class="">Cart</a></li>
                <li class="nav-item"><a href="logout " class="">Log out</a></li>

               

            </ul>
            <form class="form-inline my-2 my-lg-0" style="margin-left:400px;">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>    
        </nav>
        </div>
    </header>
   <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="/assets/fash.jpg" style="width:100%">
      <div class="text">Caption Text</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="/assets/fashion.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="/assets/gucci.jpg" style="width:100%">
      <div class="text">Caption Three</div>
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
  <div>
      <p>Welcome <?php 
      //session_start();
      $session=session();
        $email =$session->get('user_details');
        echo $email;
      ?></p>
      <p>
        <a href="profile">Profile</a>
      </p>
  </div>
</body>
</html>