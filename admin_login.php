<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin prijava</title>



    <link rel="stylesheet" href="css/style.css">




    <style>
            body, html {
            height: 80%;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .wrapper {
            width:400px;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: var(--transparent-white);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1{
            color:var(--pink);
            text-align:center;
            text-transform:uppercase;
            font-size:3rem;
        }

        .input-box {
            margin-bottom: 15px;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: var(--pink);
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: purple;
        }

        .back-btn {
            display: block;
            text-align: center;
            font-size: 1.7rem;
            margin-top: 20px;
            text-decoration: none;
            color: var(--pink);
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .back-btn:hover {
            color: purple;
        }
    </style>

</head>
<body>

    
    <section class="admin-login">
        <?php
        session_start();

        // Postavite zadano korisničko ime i lozinku
        $default_username = "admin";
        $default_password = "admin";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Provjera korisničkih podataka
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Provjera zadanih korisničkih podataka
            if ($username === $default_username && $password === $default_password) {
                // Autentikacija uspješna, stvorite sesiju za administratora
                $_SESSION['admin'] = true;

                // Preusmjeri na PHPMyAdmin ili drugi admin panel
                header("Location: http://localhost/phpmyadmin/index.php?route=/database/structure&db=contact_db"); // Zamijenite sa stvarnom URL adresom
                exit();
            } else {
                // Neuspješna prijava, prikaži poruku o pogrešci
                echo "<p style='color: red;'>Pogrešno korisničko ime ili lozinka. Pokušajte ponovno.</p>";
            }
        }
        ?>
    <div class= "wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>Admin Prijava</h1><br>
        <div class="input-box">
            <input type="text" name="username" placeholder="Korisničko ime" required>
        </div>

        <div class="input-box">
            <input type="password" name="password" placeholder="Lozinka" required>
        </div>

            <button type="submit" class="btn">Prijavi se</button>
            </form>
    </div>

    <a href="home.php" class="back-btn">Povratak na početnu stranicu</a>
    </section>
    


</body>
</html>
