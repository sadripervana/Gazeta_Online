<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Posto</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <?php include 'header.php'?>;
        <div class="container mt-5">
            <h1>Krijo Postim</h1>
            <form action="shtopostime.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Titulli</label>
                    <input type="text" class="form-control" placeholder="titulli" name="titulli"/>
                </div>
                <div class="form-group">
                    <label>Permbajtja</label>
                    <input type="text" class="form-control" placeholder="permbajtja"  name="permbajtja"/>
                </div>
                <div class="form-group">
                    <label>Kategoria</label>
                    <select class="form-control" name="kategoria">
                        <option value="Kryesore">Kryesore</option>
                        <option value="Kuriozitete"> Kuriozitete</option>
                        <option value="Showbiz">Showbiz</option>
                        <option value="Shendeti">Shendeti</option>
                    </select>
</div>
                <div class="form-group">
                    <label>Ngarko Imazh</label>
                    <input type="file" class="form-control" placeholder="ngarko imazh"  name="imazh"/>
                </div>
                <div class="form-group">
                    <input type="submit" value="Publiko" class="btn btn-danger" name="ruaj">
                </div>
               
            </form>
        </div>
		<?php
         session_start();

         if(ISSET($_POST['ruaj'])){
		
		include("lidhja.php");
		
            $titull =  addslashes($_POST['titulli']);
            $permbajtje = addslashes($_POST['permbajtja']);
            $kategoria = $_POST['kategoria'];
            $imazh = $_FILES['imazh']["name"];
            $tempname = $_FILES["imazh"]["tmp_name"];
            $folderi = "imazhet/" . $imazh;

            
            
            $ngarkimi="INSERT INTO postime (titulli,permbajtja,kategoria,imazh) VALUES('$titull','$permbajtje','$kategoria', '$imazh')";
            move_uploaded_file($tempname,$folderi);
            mysqli_query($lidhja,$ngarkimi ) or die(mysqli_error($lidhja));
            
            header('location: admin.php');
            
        }
			
         ?>
		
    </body> 
</html>

	
	
