<?php
include 'dbconfig.php';

if(isset($_POST['submit'])){

  $lnews=$_POST['lnews'];
  
  $query="insert into lnews(lnews)values('$lnews')";
  $eq=mysqli_query($con,$query);
  if($eq){
      echo "<script>alert('add lnews sucess....');</script>";
  }else{
    echo "<script>alert('unable to add the lnews');</script>";
  }

}





?>
<?php
include 'header.php';
?>




<div class="main-content">
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

            <section class="container">
                <div class="row">
                    <div class="col-md-3 py-5">
                        <?php
                        include 'sidebar.php';
                        ?>
                    </div>
                    <div class="col-md-9 py-5">
                    <form action="" method="post">
                                <div class="mx-5" id="form">
                                <div>
                                    <textarea rows="6" name="lnews" placeholder="lnews" class="form-control  mb-3 w-50"></textarea>
                                </div>
                                <div class="w-50">
                                    <input type="submit" name="submit" class="form-control bg-warning" value="Add News">
                                </div>
                                </div>
                            </form>
                    </div>
                </div>

            </section>


                  
            




<?php
include 'footer.php';
?>