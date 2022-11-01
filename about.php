<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We're Soocial, a leading branding agency with a passion for creating memorable names and internationally-renowned brands. 
            Since our launch, we’ve worked on more than 1,000 projects for clients around the world. 
            We’re big enough to handle massive projects, and yet also nimble enough to come up with names on demand that hit every time.</p>

         <p>From books for dummies, to textbooks for students, there are a wide variety of books. You can explore the young adults books store 
            if you’re looking to gift a nice book to a teenager, where you can find books from the best-selling series.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Ranjeet.jpg" alt="">
         <p> BooklyZ.com Best Platform In Website Creator Those who want to create their own new website will get the most out of it</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ranjeet</h3>
      </div>

      <div class="box">
         <img src="images/Ritesh.jpeg" alt="">
         <p>It is one of the greatest website builders l have ever used and its easy to access/create the website using this great web books</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ritesh</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Excellent free website builder. I was just looking for a website that offers free service to start with and I found BooklyZ.com. 
            I am truly amazed by it.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Karthik</h3>
      </div>

      <div class="box">
         <img src="images/Ashutosh.jpeg" alt="">
         <p>Awesome never thought a website could be started with such little effort for so little cost thanks a million</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ashutosh</h3>
      </div>

      <div class="box">
         <img src="images/vaishnavi.jpg" alt="">
         <p>Ultimately, this book is filled with hope for the future. 
            If you want to know about This popular books are avilabl.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Vaishnavi</h3>
      </div>

      <div class="box">
         <img src="images/gaja.jpeg" alt="">
         <p>You can also use the Search Inside!™ feature to look inside the book and browse through a few pages of the book</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Darco</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/swapnil.jpeg" alt="">
         <div class="share">
            <a href="https://twitter.com/swapnil15925614" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/swapnilyadavv/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/swapnil-yadav-866561207/" class="fab fa-linkedin"></a>
         </div>
         <h3>swapnil yadav </h3> <h1> (Front-End Devloper)  </h1>
      </div>

      <div class="box">
         <img src="images/Sakib.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://instagram.com/sakibsayed_?igshid=YmMyMTA2M2Y=" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sakib Malim</h3> <h1> (Back-End Devloper)  </h1>
      </div>

      <div class="box">
         <img src="images/Ritika.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://instagram.com/rritikkaaaaa?igshid=YmMyMTA2M2Y=" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ritika Parate</h3> <h1> (Front-End Devloper)  </h1>
      </div>

      <div class="box">
         <img src="images/shruti.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Shruti Sabbani</h3> <h1> (Back-End Devloper)  </h1>
      </div>
   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>