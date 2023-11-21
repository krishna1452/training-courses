<?php
include 'dbconfig.php';

if(isset($_POST['submit'])){

  $cname=$_POST['cname'];
  $cdesc=$_POST['cdesc'];
  $filename=$_FILES['userimages']['name'];
  $tempname=$_FILES['userimages']['tmp_name'];
  
  $foldername='./uploadimages/';
  if(move_uploaded_file($tempname,$foldername.$filename)){
    //echo "<script>alert('file uploded sucess....');</script>";
  }else{
    echo "<script>alert('unable to upload the file');</script>";
  }

  $query="insert into batches(cname,userpic,cdesc)values('$cname','$filename','$cdesc')";
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
                    <h1 class="page-title">Courses</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.php">Home</a>
                        </li>
                        <li>courses</li>
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
                    <form action="" method="post" class="form-group" enctype="multipart/form-data">
                                <div class="mx-5" id="form">
                                <div class="mb-3">
                                    <input type="text" name="cname" placeholder="course name" class="form-control w-50">
                                </div>
                                <div  class="mb-3">
                                    <input type="file" name="userimages">
                                </div>
                                <div  class="mb-3">
                                    <textarea name="cdesc" rows="6" placeholder="course description" class="form-control w-50"></textarea>
                                </div>
                                <div class="w-50">
                                    <input type="submit" name="submit" class="form-control bg-warning" value="Add courses">
                                </div>
                                </div>
                            </form>
                    </div>
                </div>

            </section>


                  
            




<?php
include 'footer.php';
?>