<?php
include("login.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dyqan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Cookie&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"/>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
   <style>
    body{
        padding-top:10%;
        }
       button{
           width:100%;
       }
       .titulli{
           
           color:blue;
       }
    </style>
</head>
<body>
   
<div class="container">
    <div class="row">
        <div class="col">
            <div class="h1 titulli" >
        DYQAN ONLINE
       
        
        </div><br/>
            <p class="h3 " >
        
       Mireserdhet,Per te patur akses,
                ju lutem regjistrohuni!
            </p>
        
        </div>
    <div class="col"> 
        <div class="h2 text-center" >
        
        Login
        
        </div>
   <form method="post" action="index.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>
  <div class="mb-3 form-check">

    
  </div>
  <button type="submit" class="btn btn-primary" name="login">Hyr</button>
</form> 
    <div id="emailHelp" class="form-text">Ke harruar fjalekalimin?</div><br/>
        
        <a href="register.php"><button type="submit" class="btn btn-success">Regjistrohu</button></a>
        </div>
        
 </div>
</div>

     
    </body>
    
 
   


</html>