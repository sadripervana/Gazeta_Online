<?php
    include("lidhja.php");
    session_start();
    
      $q= "select * from postime";
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
                <div class="col-lg-8">
                <h1 >Admin Dashboard:</h1>
                    <h4><a href="shtopostime.php"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                  </svg> Shto postim</a></h4>

                </div>
                <div class="col-lg-4">
              </div>
              </div>

            <!-- Kartat e produktve -->
            <div class="row mt-4" >
                
             <?php
               
                  
             ?>
                <table class="table table-striped table-border table-hover">
                  <thead>
                    <th>Id</th>
                    <th>Titulli</th>
                    <th>Permbajtja</th>
                    <th>Kategoria</th>
                    <th>Menaxho</th>
                  </thead>

                  <tbody>
                    <?php 
                      $rekord = mysqli_num_rows($query);
               if ($rekord==0)
                        {
                           printf("<p class='text-danger'> Nuk ka artikuj..</p>");
                        }
         
                
                  while ($qq=mysqli_fetch_array($query)) 
                  {
                     ?>
                  
                
                          <tr>
                          <td><?php echo $qq['postime_id']; ?></td>
                          <td><?php echo substr($qq['titulli'],0,20);?>
                          <td><?php echo substr($qq['permbajtja'],0,20); ?></td>
                          <td><?php echo substr($qq['kategoria'],0,20); ?></td>
                          
                          <td>
                          <a href="profil.php?id=<?php echo $qq['postime_id']; ?>" class="card-link">Me teper</a>
                          <a href="fshijpostime.php?id=<?php echo $qq['postime_id']; ?>" class="card-link">Fshij</a>
    					            <a href="updatepostime.php?id=<?php echo $qq['postime_id']; ?>" class="card-link">Ndrysho</a>
                        </td>
                          </tr>


                <?php
                  

                  }
                ?>
                
                          </tbody>
                      </table>
            <?php
                  include 'footer.php';

                 
                ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
