<?php
session_start();
    include("lidhja.php");
    
    if(isset($_POST['btn']))
    {
        $titulli=$_POST['titulli'];
        $permbajtja=$_POST['permbajtja'];
        $kategoria=$_POST['kategoria'];
        $imazh=$_POST['imazh'];
    
        $id = $_GET['id'];
        $q= "update postime set titulli='$titulli', permbajtja='$permbajtja', kategoria='$kategoria',imazh='$imazh' where postime_id='$id'";
        $query=mysqli_query($lidhja,$q);
        header('location:admin.php');
    } 
	else if(isset($_GET['id'])) 
	{
        $q = "SELECT * FROM postime WHERE postime_id='".$_GET['id']."'";
        $query=mysqli_query($lidhja,$q);
        $res= mysqli_fetch_array($query);
    }
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ndrysho list</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php include 'header.php'?>;
        <div class="container mt-5">
            <h1>Ndrysho Artikull</h1>
            <form method="post">
                <div class="form-group">
                    <label>Titulli artikullit</label>
                    <input type="text" class="form-control" name="titulli" placeholder="Emri artikullit" value="<?php echo $res['titulli'];?>"/>
                </div>
                <div class="form-group">
                    <label>Permbajtja artikullit</label>
                    <textarea name="permbajtja" class="form-control" maxlength="50"><?php echo $res['permbajtja'];?>
                    </textarea>
                    
                </div>
                <div class="form-group">
                    <label>Kategoria</label>
                    <select class="form-control" name="kategoria">
                        <option value="Kryesore">Kryesore</option>
                        <option value="Kryeziteti">Kryeziteti</option>
                        <option value="Showbiz">Showbiz</option>
                        <option value="Shendeti">Shendeti</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Sasia artikullit</label>
                    <input type="file" class="form-control" placeholder="ngarko imazh"  name="imazh"/>
                </div>
                
                <div class="form-group">
                    <input type="submit" value="Ndrysho" name="btn" class="btn btn-danger">
                </div>
            </form>
        </div>
    </body> 
</html>
