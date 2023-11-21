<?php
include 'dbconfig.php';
include 'header.php';
$sno=$_GET['val'];
$opr=$_GET['opr'];

if(isset($_POST['submit'])){
    $cname=$_POST['cname'];
    $tname=$_POST['tname'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $duration=$_POST['duration'];
  $query="update courses set cname='$cname',tname='$tname',date='$date',time='$time',duration='$duration' where id='$sno'";
  $eq=mysqli_query($con,$query);
  if($eq){
    echo "<script>alert('update lnews sucess....');
       location.href='delete_edit_operation_batch.php' ;
      </script>";
  }else{
    echo "<script>alert('unable to update the lnews');</script>";
  }
  }


if($opr=='del'){
  $query="delete from courses where id='$sno'";
  $eq=mysqli_query($con,$query);
  if($eq){
      echo "<script>alert('del courses sucess....');
       location.href='delete_edit_operation_batch.php' ;
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
                    $query="select * from courses order by id desc";
                    $eq=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($eq)){
                        echo '                       
                            <form action="" method="post" class="">
                                <div class="mx-5" id="">
                                <div class="mb-3">
                                    <input type="text" name="cname" placeholder="course name" class="form-control w-50" value='.$row['cname'].'>
                                </div>
                                <div  class="mb-3">
                                    <input type="text" name="tname" placeholder="trainer name" class="form-control w-50" value='.$row['tname'].'>
                                </div>
                                <div  class="mb-3">
                                    <input type="date" name="date" placeholder="date" class="form-control w-50" value='.$row['date'].'>
                                </div>
                                <div  class="mb-3">
                                    <input type="text" name="time" placeholder="time" class="form-control w-50" value='.$row['time'].'>
                                </div>
                                <div  class="mb-5">
                                    <input type="text" name="duration" placeholder="duration" class="form-control w-50" value='.$row['duration'].'>
                                </div>
                                <div class="w-50">
                                    <input type="submit" name="submit" class="form-control bg-warning" value="update courses">
                                </div>
                            
                            </form>
                    
                        ';
                    }
                    ?>

                   
                    </div>
                </div>

            </section>
            
                  


                  
            



<?php
include 'footer.php';
?>