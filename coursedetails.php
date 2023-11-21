<?php
include 'dbconfig.php';
$cname=$_GET['cname'];
?>


<!DOCTYPE html>
<html lang="">
    
<head> 
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Educavo - Education HTML Template</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <?php
        include 'header.php';
        ?>

		<!-- Main content Start -->
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
                        <li>Course</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Popular Courses Section Start -->
            <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color pt-100 pb-100 md-pt-70 md-pb-80">
                <div class="container">
                    <div class="row">
                    <?php
                    $query="select * from batches where cname='$cname'";
                    $eq=mysqli_query($con,$query);
    
                    while($row=mysqli_fetch_array($eq)){
                     echo '
                            <div class="col-lg-12 col-md-6 grid-item filter1">
                            <div class="courses-item mb-30">
                                <div class="img-part">
                                    <img src="uploadimages/'.$row['userpic'].'" alt="">
                                </div>
                                <div class="content-part">
                                    
                                    <h3 class="title">'.$row['cname'].'</a></h3>
                                    
                                        <div class="">
                                            <p>'.$row['cdesc'].'</p>
                                        </div>
                                
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        
        ';
    }
    ?>
    







                        
       <?php
       include 'footer.php';
       ?>