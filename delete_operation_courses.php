<?php
include 'dbconfig.php';
include 'header.php';
$sno=$_GET['val'];
$opr=$_GET['opr'];
if(isset($_POST['submit'])){
  $cname=$_POST['cname'];
  $cdesc=$_POST['cdesc'];
  $filename=$_FILES['userimages']['name'];
  $tempname=$_FILES['userimages']['tmp_name'];
  
  $foldername='./uploadimages/';
  if(move_uploaded_file($tempname,$foldername.$filename)){
    //echo "<script>alert('file uploded sucess....');</script>";
  }else{
    //echo "<script>alert('unable to upload the file');</script>";
  }

   $query="update batches set cname='$cname',userpic='$filename',cdesc='$cdesc'where id='$sno'";
  $eq=mysqli_query($con,$query);
  if($eq){
    echo "<script>alert('update lnews sucess....');
       location.href='delete_edit_operation_course.php' ;
      </script>";
  }else{
    echo "<script>alert('unable to update the lnews');</script>";
  }
}

if($opr=='del'){
  $query="delete from batches where id='$sno'";
  $eq=mysqli_query($con,$query);
  if($eq){
      echo "<script>alert('del courses sucess....');
       location.href='delete_edit_operation_course.php' ;
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
  if($opr=='edit'){
  

  }
?>
       

            <section class="container">
                <div class="row">
                    <div class="col-md-3 py-5">
                        <?php
                        include 'sidebar.php';
                        ?>
                    </div>
                    <?php
                    $query="select * from batches order by id desc";
                    $eq=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($eq)){
                        echo '                       
                        <div class="col-md-9 py-5">
                        <form action="" method="post" class="form-group" enctype="multipart/form-data">
                                    <div class="mx-5" id="form">
                                    <div class="mb-3">
                                        <input type="text" name="cname" placeholder="course name" class="form-control w-50" value='.$row['cname'].'>
                                    </div>
                                    <div  class="mb-3">
                                        <input type="file" name="userimages" value='.$row['userpic'].'>
                                    </div>
                                    <div  class="mb-3">
                                        <textarea name="cdesc" rows="6" placeholder="course description" class="form-control w-50">
                                        '.$row['cdesc'].'
                                        </textarea>
                                    </div>
                                    <div class="w-50">
                                        <input type="submit" name="submit" class="form-control bg-warning" value="Add courses">
                                    </div>
                                    </div>
                                </form>
                        </div>
                    
                        ';
                    }
                    ?>

                   
                    </div>
                </div>

            </section>
            
                  


                  
            



<?php
include 'footer.php';
?>