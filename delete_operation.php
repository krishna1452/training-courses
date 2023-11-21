<?php
include 'dbconfig.php';
include 'header.php';
$sno=$_GET['val'];
$opr=$_GET['opr'];

if(isset($_POST['submit'])){

  $lnews=$_POST['lnews'];
  $query="update lnews set lnews='$lnews' where id='$sno'";
  $eq=mysqli_query($con,$query);
  if($eq){
    echo "<script>alert('update lnews sucess....');
       location.href='delete_edit_operation.php' ;
      </script>";
  }else{
    echo "<script>alert('unable to update the lnews');</script>";
  }
  }


if($opr=='del'){
  $query="delete from lnews where id='$sno'";
  $eq=mysqli_query($con,$query);
  if($eq){
      echo "<script>alert('del lnews sucess....');
       location.href='delete_edit_operation.php' ;
      </script>";
  }else{
    echo "<script>alert('unable to del the lnews');</script>";
  }
  }

?>

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Admindashbord</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.php">Home</a>
                        </li>
                        <li>dashbord</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->
  
   <?php
  if($opr=='del'){
  

  }
?>
       

            <section class="container">
                <div class="row">
                    <div class="col-md-3 py-5">
                        <?php
                        include 'sidebar.php';
                        ?>
                    </div>
                    <div class="col-md-9 py-5">
                    <?php
                    $query="select * from lnews order by id desc";
                    $eq=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($eq)){
                        echo '
                        <form action="" method="post">
                        <div class="mx-5" id="form">
                        <div>
                            <textarea rows="6" name="lnews" placeholder="lnews" class="form-control  mb-3 w-50">
                            '.$row['lnews'].'
                            </textarea>
                        </div>
                        <div class="w-50">
                            <input type="submit" name="submit" class="form-control bg-warning" value="update News">
                        </div>
                        </div>
                    </form>
                        ';
                    }
                    ?>

                   
                    </div>
                </div>

            </section>
            
                  }


                  
            



<?php
include 'footer.php';
?>