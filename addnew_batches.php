<?php
include 'dbconfig.php';

if(isset($_POST['submit'])){

  $cname=$_POST['cname'];
  $tname=$_POST['tname'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $duration=$_POST['duration'];
  
  $query="insert into courses(cname,tname,date,time,duration)values('$cname','$tname','$date','$time','$duration')";
  $eq=mysqli_query($con,$query);
  if($eq){
      echo "<script>alert('add courses sucess....');</script>";
  }else{
    echo "<script>alert('unable to add the courses');</script>";
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
                    <h1 class="page-title">Batches</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.php">Home</a>
                        </li>
                        <li>batches</li>
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
                    <form action="" method="post" class="form-group">
                                <div class="mx-5" id="form">
                                <div class="mb-3">
                                    <input type="text" name="cname" placeholder="course name" class="form-control w-50">
                                </div>
                                <div  class="mb-3">
                                    <input type="text" name="tname" placeholder="trainer name" class="form-control w-50">
                                </div>
                                <div  class="mb-3">
                                    <input type="date" name="date" placeholder="date" class="form-control w-50">
                                </div>
                                <div  class="mb-3">
                                    <input type="text" name="time" placeholder="time" class="form-control w-50">
                                </div>
                                <div  class="mb-5">
                                    <input type="text" name="duration" placeholder="duration" class="form-control w-50">
                                </div>
                                <div class="w-50">
                                    <input type="submit" name="submit" class="form-control bg-warning" value="Add batches">
                                </div>
                                </div>
                            </form>
                    </div>
                </div>

            </section>


                  
            




<?php
include 'footer.php';
?>