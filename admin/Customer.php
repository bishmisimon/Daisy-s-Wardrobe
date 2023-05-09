
<?php

session_start();



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width",initial-scale1=1.0>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= initial-scale=1.0">
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet "href= "button.css">
    <link rel="stylesheet" href="slide.css">
    <link rel="stylesheet" href="video.css">
    <link rel="stylesheet" href="headervideo.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="/search/search.css">
  
    
    <title>Daisy's Wardrobe</title>
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  
   

  

    
</head>
<body>

 <!-- test -->
   



        
          


 <!-- Clothes|Catogories -->


 
   <div class="header"> <div class="contain">
    <div class="navbar">
        <div class="logo">
    <img src="../Online-Store/Store-Images/Daisylogo.png" width="300px">
                
        </div>
        <nav>
       
<ul>

        <li><a href="../admin/Login/login.php">Sign In</a></li>
        <li><a href="../admin/Login/signup.php" >Sign Up</a></li>
            
        
        <img src="../Online-Store/Store-Images/cart.png" width="30px" height="30px">
        <img src="../Online-Store/Store-Images/menu.png" class="menu-icon" onclick="menutoggle()"><br><br><br><br>

        <ul type="none" id="MenuItems">
                <li><a href="home.php">Home</a></li>
                <li><a href="">About</li>
                <li><a href=""></a></li>
                <li><a href="">Contact</a></li>

               
  
    
  </div>

</li>


        </ul>




        </nav>

  
</div>


<div class="btn-group">
  <button  onclick="location='Men.php'">Men</a></button>
  <button  onclick="location='Women.php'">Women</button>
  <button   onclick="location='kids.php'">Kids</button>
  <button  onclick="location='footwear.php'">Footwear</button>
</div>


<div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="index.php" method="GET">
                                    <div class="input-group mb-3">
                                   <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="topnav" placeholder="Search data"> <button type="submit" class="btn btn-primary" align="center">Search</button>
                                        
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


 <!-- The video -->






     <!-- The video -->
<video autoplay muted loop id="myVideo">
  <source src="../admin/Videos/wardrobe.mp4" type="video/mp4">
 

    
</video>

<!-- Optional: some overlay text to describe the video -->




  <!-- The video -->






            <div class="row">
                 <div class="col-2">
                    <h1 >Fashion on <br>your own Style !</h1>
                    <p>

                        "If you love something, wear it all the time... Find things that suit you.<br> That's how you look extraordinary."<br><br>
                      
                        </p>

                        <a href="" class="btn">Explore Now &#8594;</a>
             </div>
                <div class="col-2 img">
                    <img src="../Online-Store/Store-Images/fam.png">

        </div>
    </div>
</div>
</div>
   
 <!-- Clothes|Catogories -->
 <div class="offer">
 <div class="btn-group">

 <button onclick="location='Trouser.php'">Trouser</button>
  <button onclick="location='Short.php'">Short</button>
  <button onclick="location='T-shirt.php'">T-shirt</button>
  <button onclick="location='Frock.php'">Frock</button>
   <button onclick="location='Sleeves.php'">Sleeveless Top</button>
  <button onclick="location='Saree.php'">Saree</button>
  <button onclick="location='Lehenga.php'">Lehenga</button>
  <button onclick="location='Shirt.php'">Shirt</button>
  <button onclick="location='Blaiser.php'">Blaiser</button>
  <button onclick="location='Suit.php'">Office|Full Suit</button>
  <button onclick="location='Tie.php'">Tie</button>
  
  </div>
 
  <div class="offer">

 <div class="Catogories">
    <div class="small-contain">
        <div class="rows">
       
            
            
             <div class="col-3">
             <h2 class="headline">Men's Wear in  Wardrobe</h2> 
                
             <img src="../Online-Store/Store-Images/men.jpg" > <a href="Men.php" class="btn">Explore Now &#8594;</a>

             </div>
                
                
               
   

               
                
            <div class="col-3">
            <h2 class="headline">Women's Wear in  Wardrobe</h2> 
                
            <img src="../Online-Store/Store-Images/girls.jpg"> <a href="Women.php" class="btn">Explore Now &#8594;</a>
        
        </div>
                
            <div class="col-3">

            <h2 class="headline">Footwear in  Wardrobe</h2> 
                <img src="../Online-Store/Store-Images/footwaer.jpg">  <a href="Men.php" class="btn">Explore Now &#8594;</a> </div>


            <div class="col-3"> <h2 class="headline">Kids 's Wear in Wardrobe</h2> 
                <img src="../Online-Store/Store-Images/kids.webp">    <a href="kids.php" class="btn">Explore Now &#8594;</a></div>
    
    </div>

    
    </div>
 
 

   <!-----Products-->


  
   <div class="btn-group">
  <button onclick="location='Sandals.php'">Sandels</button>
  <button onclick="location='heals.php'">heals</button>
  <button onclick="location='Boots.php'">Boots</button>
 
  <button onclick="location='Shoes.php'">Shoes</button>
  <button onclick="location='Slippers.php'">Slippers</button>
 

  <button onclick="location='wallet.php'">Wallet</button>
  <button onclick="location='Belt.php'">Belt</button>
  <button onclick="location='Tie.php'">Tie</button>

  <button>Bikini</button>
  <button>Swimming Wear</button>

  </div>





  


    </div>

    </div>

    

               
 
    <div class="offertwo">

    <div class="small container">
        <div class="row">
                <div class="col-2">
                    <div class="offerimg">
                
                    
                    <img src="../Online-Store/Store-Images/croptop.webp "style= "width:100%" >

                

                    
                </div>
                <div class="col-2">
                    <p>	&nbsp;Exclusively Availble on Daisy's Wardrobe</p>
                    <h1>Crop Top</h1>
                    <p> &nbsp;Suitabele for Evening Occasions.Suitabele for Evening Occasions.
                    &nbsp;Suitabele for Evening Occasions ...50% Discount
                    
                    &nbsp; for Evening Occasions.</p>
                     <a href="" class="btn">	&nbsp;Buy Now! &#8594</a>
                </div>
        </div>
    </div>
</div>
</div>

<!--slideshow test--->


<div class="slideshow-container">
      <div class="mySlides fade">
         <div class="numbertext">1 / 3</div>
         <img src="../admin/slide/offer2.jpg"  style="width:100%">
         <a href="" class="btn">	&nbsp;Shop Now! &#8594</a>
         </div>
         <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="../admin/slide/offer3.jpg"  style="width:100%;">
            <a href="" class="btn">	&nbsp;Shop Now! &#8594</a>
         </div>
         <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="../admin/slide/offer2.jpg" style="width:100%">
            <a href="" class="btn">	&nbsp;Shop Now! &#8594</a>
         </div>
         <a class="prev" onclick="plusSlides(-1)">❮</a>
         <a class="next" onclick="plusSlides(1)">❯</a>
   </div>
   <br>
   <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
   </div>
   <script>
      var slideIndex = 1;
      showSlides(slideIndex);
      function plusSlides(n) {
         showSlides(slideIndex += n);
      }
      function currentSlide(n) {
         showSlides(slideIndex = n);
      }
      function showSlides(n) {
         var i;
         var slides = document.getElementsByClassName("mySlides");
         var dots = document.getElementsByClassName("dot");
         if (n > slides.length) {slideIndex = 1}
         if (n < 1) {slideIndex = slides.length}
         for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
         }
         for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
         }
         slides[slideIndex-1].style.display = "block";
         dots[slideIndex-1].className += " active";
      }
   </script>






                            
<!--testimonial---->


<div class="new">
<div class="testimonial">
    <div class="small-contain">
        <div class="row">
           
        <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Essay on Clothes – Some have it in accordance to the latest trending 
                    vogue in the market, after scrutinizing for hours the innumerable fashion
                     magazines,while others set out to be the visionaries in the field, 
                     creating and endorsing their own ‘label’</p>
                <div  class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <img src="../Online-Store/Store-Images/kelly.png" >
                <h3>Jayamini weeeasinghe</h3>
            </div>


            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Essay on Clothes – Some have it in accordance to the latest trending 
                    vogue in the market, after scrutinizing for hours the innumerable fashion
                     magazines,while others set out to be the visionaries in the field, 
                     creating and endorsing their own ‘label’</p>
                <div  class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <img src="../Online-Store/Store-Images/kelly.png" >
                <h3>Jayamini weeeasinghe</h3>
            </div>


            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Essay on Clothes – Some have it in accordance to the latest trending 
                    vogue in the market, after scrutinizing for hours the innumerable fashion
                     magazines,while others set out to be the visionaries in the field, 
                     creating and endorsing their own ‘label’</p>
                <div  class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <img src="../Online-Store/Store-Images/kelly.png" >
                <h3>Jayamini weeeasinghe</h3>
            </div>

            
            </div>
           
        </div>
    </div>
    </div>

<!------brands-->

<div class="brands">
    <div class="small-containe">
        <div class="row">
            <div class="col-5">
                <img src="../Online-Store/Store-Images/GUCCI.png" >
            </div>
            <div class="col-5">
                <img src="../Online-Store/Store-Images/nike.jpg" >
            </div>
            <div class="col-5">
                <img src="../Online-Store/Store-Images/zara.jpg" >
            </div>
            <div class="col-5">
                <img src="../Online-Store/Store-Images/addidas.jpg" >
            </div>
            <div class="col-5">
                <img src="../Online-Store/Store-Images/boss.jpg" >
            </div>
        </div>
    </div>
</div>
<!--------footer--->
 <a href="ManageDress.php">Log in to Administration</a>

<div class="footer">
    <div class="contain">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile Phone</p>
                <div class="app-logo">
                    <img src="../Online-Store/Store-Images/apple.jpg">
                    <img src="../Online-Store/Store-Images/aps.png">
                </div>

            </div>
            <div class="footer-col-2">
               
                <img src="../Online-Store/Store-Images/Daisylogo.png">
                <p>Our Purpose is to Sustainably Make the Pleasure and Benifits of Sports Accessible to Many.</p>
                
            </div>

            <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
                <li>Coupons</li>
                <li>Blog Post</li>
                <li>Return Policy</li>
                <li>Join Affliate</li>
                

            </ul>
            </div>


            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instergram</li>
                    <li>Youtube</li>
                </ul>
                </div>

        </div>

        <hr>
        <p class="copyright">Copyright 2022 Daisy's Wardrobe</p>
    </div>
</div>



<!------js for toggle menu----->

<script>
    var MenuItems=document.getElementById("MenuItems");
    Menutems.style.maxHeight="0px";
    
    function menutoggle(){
            if (MenuItems.style.maxHeight=="0px")
             {
               MenuItems.style.maxHeight= "200px" 
            }
            else
            {
                MenuItems.style.maxHeight="0px"
            }



    }
</script>
</body>
</html>