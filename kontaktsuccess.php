<?php
session_start();
    if(isset($_POST['btn'])){
        include "lidhja.php";

        $emri = $_POST['emri'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $query = "INSERT INTO kontakt (emri , email, subject, message) 
        VALUES ('$emri','$email','$subject','$message') ";
        mysqli_query($lidhja,$query);
        header("location:kontaktsuccess.php");
    }

 ?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Shiko listen</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include 'header.php'?>;
         <div class="container mt-5">
        <h1 style="color: green">Faleminderit qe na kontaktuat!</h1>
        <h3>Do ju kthejm pergjigje se shpejti!</h3>
    </div>
            <?php
                  include 'footer.php';

                 
                ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
