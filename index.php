<?php
    include("lidhja.php");
    session_start();
    
      $q= "select * from postime";
      $query=mysqli_query($lidhja,$q);
      $mer= "select * from postime LIMIT 5";
      $marrja=mysqli_query($lidhja,$mer);
 
    
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
            
            <div class="row">
            <div class="col-lg-12">
            
        <div id="carouselExampleCaptions" class="carousel slide" >
       
 
  
        <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 3"></button>
  </div>
  
  
  
  <div class="carousel-inner">
  
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="imazhet/banner.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Rreth nesh</h5>
        <p>Kjo faqe është krijuar për të informuar audiencën në lidhje me aktualitetin, politikën, kuriozitetet, showbizin dhe sportin, duke përshirë këtu lajmet e fundit nga vendi, rajoni dhe bota.</p>
      </div>
    </div>
    <?php while ($merr=mysqli_fetch_array($marrja)) 
  {
  
?>
    <div class="carousel-item " data-bs-interval="1000">
      <img src="<?php echo 'imazhet/'.$merr['imazh']; ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $merr['titulli']; ?></h5>
        <p><?php echo substr($merr['permbajtja'],0,100); ?></p>
      </div>
    </div>
    
    <?php }
              ?>
  </div>
 
  
                  

              
</div></div> </div></div>

        <div class="container mt-5">
            <!-- top -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">Postimet me te fundit:</h1>
                    
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

                <div class="col-lg-4">
                    <div class="card">
                    <img src="<?php echo 'imazhet/'.$qq['imazh']; ?>" class="card-img-top" >
                        <div class="card-body">
                          <h5 class="card-title"><?php echo substr($qq['titulli'],0,20); ?>..</h5>
                          <h6 class="card-subtitle mb-2 text-muted"><?php echo $qq['kategoria']; ?></h6>
                          <h7 class="card-text text-justify "><?php echo substr($qq['permbajtja'],0,100); ?>...</h7>
                          <br>
                          <a href="profil.php?id=<?php echo $qq['postime_id']; ?>" class="card-link">Me teper</a>
                          
                        </div>

                      </div><br>
                </div>

                <?php
                  

                  }
                ?>
                
            </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    <?php
                  include 'footer.php';

                 
                ?>
</html>
