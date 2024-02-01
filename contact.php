<?php

$conn=mysqli_connect('localhost', 'root','','contact_db');

if(isset($_POST['posalji'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $plan=$_POST['plan'];
    $address=$_POST['address'];
    $message=$_POST['message'];
    $event_date=$_POST['event_date'];

        // Provjera ispravnosti e-mail adrese
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Neispravna e-mail adresa";
            exit(); // Prekida izvršenje skripte
        }
    

    $insert ="INSERT INTO `contact_form`( `name`, `email`, `number`, `plan`, `address`, `message`, 'event_date') VALUES ('$name','$email','$number','$plan','$address','$message', '$event_date')";

mysqli_query($conn, $insert);


// Slanje e-pošte
$to = $email; 
$subject = "Potvrda kupovine";
$message = "Hvala vam što ste obavili kupovinu!\n\nIme: $name\nE-mail: $email\nBroj telefona: $number\nOdabrani plan: $plan\nAdresa: $address\nPoruka: $message";
$headers = "From: djurjdicaknezevic2@gmail.com";

// Slanje e-pošte
mail($to, $subject, $message, $headers);

header('location:contact.php');

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class= "container">
<?php @include 'header.php';?>

<section class="contact">
    <h1 class="heading">kontaktirajte nas</h1>

    <form action=""method="post">

        <div class="flex">

            <div class="inputBox">
                <span>Unesite ime</span>
                <input type="text" placeholder="unesite Vase ime" name="name" required>
            </div>

            <div class="inputBox">
                <span>Unesite email</span>
                <input type="email" placeholder="unesite Vašu email adresu" name="email" required>
            </div>

            <div class="inputBox">
                <span>Unesite telefonski broj</span>
                <input type="number" placeholder="unesite Vaš broj" name="number" required>
            </div>

            <div class="inputBox">
                <span>Izaberite paket</span>
                <select name="plan">
                    <option disabled="disabled">-------------------</option>
                    <option value="basic vjencanje">basic paket vjenčanje</option>
                    <option value="standard vjencanje">standard paket vjenčanje</option>
                    <option value="premimum vjencanje">premimum paket vjenčanje</option>
                    <option disabled="disabled">-------------------</option>
                    <option value="basic krstenje">basic paket krštenje</option>
                    <option value="standard krstenje">standard paket krštenje</option>
                    <option value="premimum krstenje">premimum paket krštenje</option>
                    <option disabled="disabled">-------------------</option>
                    <option value="basic rodjendan">basic paket rođendan</option>
                    <option value="standard rodjendan">standard paket rođendan</option>
                    <option value="premimum rodjendan">premimum paket rođendan</option>
                </select>
            </div>

            <div class="inputBox">
                <span>tvoja adresa</span>

                <input type='address' placeholder="unesite Vašu adresu" name="address">
            </div>

            <div class="inputBox">
            <span>odaberite datum događaja</span>
            <input type="date" name="event_date" required>
            </div>

            
            <div class="inputBox">
                <span>tvoja poruka</span>

                <textarea name="message" placeholder="unesite Vašu poruku" required cols="30" rows="10"></textarea>
            </div>

        </div>

        <input type="submit" value="posalji poruku" name="posalji" class="btn">

    </form>
</section>

<?php @include 'footer.php';?>
</div>

    
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
</body>
</html>