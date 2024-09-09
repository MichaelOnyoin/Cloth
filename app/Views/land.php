<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link rel="stylesheet" href="/assets/land.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="assets/cloth.js"></script>
    <background>
        
    </background>
   
</head>
<body>
  
    <h1><img src="/assets/clothlogo.jpg" id="logo1">Clothstock</h1>
    <script src="/assets/cloth.js"></script>
    <!-- Slideshow container -->
<div class="slideshow-container">
  

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="/assets/mens1.jpg" style="width:700px; height: 400px;">
      <div class="text" style="font-size: 25px;"> Get</div>
      
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="/assets/women1.jpg" style="width:700px; height: 400px;">
      <div class="text" style="font-size: 25px;">Dressed</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="/assets/pets1.jpg" style="width:700px; height: 400px;">
      <div class="text" style="font-size: 25px;">Up</div>
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
    
    
        <nav>
          <div class="class1">
            <ul>
                <a href="cloth/men" id="menu"><li>MEN</li></a>
                <a href="cloth/women"><li>WOMEN</li></a>
                <a href="cloth/children"><li>CHILDREN</li></a>
                <a href="cloth/pets"><li>PETS</li></a>
                <a><li>FASHION</li></a>
            </ul>
            </div>
        </nav>
 
  <div id="content"> <p>Come over to Clothstock and get dressed to look good and appear attractive</p> 
    </div>
    <div class="subscribe">
      <form>
      <p>Join our email list</p>
      <input type="email" name="email list" id="subscribe" value=""><button type="submit" class="sub"><a href="cloth/register">SUBSCRIBE</a></button>
      <p>By clicking "SUBSCRIBE" I agree to receive news, promotions, information, and offers from Clothstock</p>
      <p>Already a member then<br><a href="<?php echo site_url('SearchController/logina')?>"  style="color: black;"> Log in</a> </p>
      </form>
    </div>
    <footer>
      <span class="lowersection" id="belowthefold">
      <div>
        
      <ul id="list1">
        <li><h4>Locations</h4></li>
        <li>Kampala Boulevard</li>
        <li>Nairobi CBD</li>
        <li>Wakiso Victoria Mall</li>
        <li>Mombasa Ocean View</li>

      </ul>
      <ul id="list2">
        <li><h4>Contact Us</h4></li>
        <li>info@clothstock.co.ug</li>
        <li>+256 313 72 00 00</li>
        <li>+254 200 78 00 00</li>
      </ul>
      <ul id="list3">
        <li><h4></h4></li>
        <li>What's new</li>
        <li>Handbags</li>
        <li>Jewelry and watches</li>
        <li>Decor and lifestyle</li>
      </ul>
      </div></span>
    </footer>
    <script src="/assets/slideshow.js"></script>
</body>
</html>