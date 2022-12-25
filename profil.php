<?php
    include("lidhja.php");
    session_start();
    $id = $_GET['id'];
      $q= "select * from postime where postime_id=$id";
      $query=mysqli_query($lidhja,$q);
     
    
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
            <!-- top -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">Kuriozitete </h1>
                    
                </div>
                
</div>

            <!-- Kartat e produktve -->
            <div class="row mt-4" ">
                
             <?php
               $rekord = mysqli_num_rows($query);
               if ($rekord==0)
                        {
                           printf("<p class='text-danger'> Nuk ka artikuj..</p>");
                        }
         
                
                  while ($qq=mysqli_fetch_array($query)) 
                  {
                  
             ?>

                <div class="col-lg-12">
                    <div class="card">
                    <img src="<?php echo 'imazhet/'.$qq['imazh']; ?>" class="card-img-top" >
                        <div class="card-body">
                          <h3 class="card-title"><?php echo $qq['titulli']; ?></h3>
                          <h6 class="card-subtitle mb-2 text-muted"><?php echo $qq['kategoria']; ?></h6>
                          <h7 class="card-text text-justify "><?php echo $qq['permbajtja']; ?>...</h7>
                          
                         
    					   
                        </div>

                      </div><br>
                </div>

                <?php
                  

                  }
                ?>
                
            </div>
            <?php
                  include 'footer.php';

                 
                ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
