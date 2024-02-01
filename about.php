<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class= "container">


<?php @include 'header.php';?>


<section class = "about">

<img src ="images/logo.png" alt="">
<h3>o nama</h3>
<p>DOBRODOŠLI U NAŠ SVIJET ORGANIZACIJE <br> Dobrodošli na stranicu EPMS-Event Planner Management System,<br> 
	gdje svaki događaj postaje priča za pamćenje. Naša strast za stvaranjem nezaboravnih trenutaka zajedno
	sa Vama čini nas pravim partnerom na putu do Vašeg savršenog događaja. Vaši događaji i naša specijalnost jesu vjenčanja, 
	rođendani i krštenja koji su prigode za koje nudimo razne cjenovne pakete koji će odgovarati svima.
</p>
<a href = "services.php"  class= "btn-usluge" >naše usluge</a>
<a href = "pricing.php"  class= "btn-paketi" >pogledaj pakete</a>
<a href = "contact.php"  class= "btn-kontakt" >kontaktiraj nas</a>

</section>
<br> <br>
<section class = "team">
<h1 class ="heading"> naš tim</h1>
<div class="box-container"> 
<div class ="box">
<img src ="images/team-1.jpg" alt="">
<h3>Đina Stanković</h3>
<p>Direktor</p>
<div class = "share">
<a href="#" class="fab fa-facebook-f"></a>
<a href="#" class="fab fa-twitter"></a>
<a href="#" class="fab fa-linkedin"></a>
<a href="#" class="fab fa-instagram"></a>
</div>
</div>

<div class ="box">
<img src ="images/team-2.jpg" alt="">
<h3>Dajana Bajić</h3>
<p>Menadžer</p>
<div class = "share">
<a href="#" class="fab fa-facebook-f"></a>
<a href="#" class="fab fa-twitter"></a>
<a href="#" class="fab fa-linkedin"></a>
<a href="#" class="fab fa-instagram"></a>
</div>
</div>

<div class ="box">
<img src ="images/team-3.jpg" alt="">
<h3>Ivana Knežević</h3>
<p>Asistent</p>
<div class = "share">
<a href="#" class="fab fa-facebook-f"></a>
<a href="#" class="fab fa-twitter"></a>
<a href="#" class="fab fa-linkedin"></a>
<a href="#" class="fab fa-instagram"></a>
</div>
</div>

<div class ="box">
<img src ="images/team-4.jpg" alt="">
<h3>Tina Marinković</h3>
<p>Koordinator</p>
<div class = "share">
<a href="#" class="fab fa-facebook-f"></a>
<a href="#" class="fab fa-twitter"></a>
<a href="#" class="fab fa-linkedin"></a>
<a href="#" class="fab fa-instagram"></a>
</div>
</div>

</div>






<?php @include 'footer.php';?>

</div>

   
 
    
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
</body>
</html>