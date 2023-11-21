<?php
include 'dbconfig.php';

if(isset($_POST['submit'])){

  $uname=$_POST['uname'];
  $password=$_POST['password'];
  
//   if($uname=='admin' and $password=='12345'){
//     header('location:admindashbord.php');
//     }else{
//         echo"<script>alert('Invalid username and password ');</script>";
//     }
$query="select * from admin where name='$uname' or phone='$uname' and password='$password'";
$eq=mysqli_query($con,$query);
if($eq){
    header('location:admindashbord.php');
}else{
    echo '<script>alert("invalid username and password");</script>';
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
                    <h1 class="page-title">Login</h1>
                    <ul>
                        <li>
                            <a class="active" href="admindashbord.php">Dashbord</a>
                        </li>
                        <li>login</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->


                        <div class="col-md-4 my-5 form-group">
                            
                            <form action="" method="post">
                                <div class="mx-5" id="form">
                            <h2 class="text-center bg-success">Register Now</h2>
                                <div>
                                    <input type="text" name="uname" placeholder="user name" class="form-control  mb-3">
                                </div>
                                <div>
                                    <input type="password" name="password" placeholder="passwod" class="form-control mb-3">
                                </div>
                                <div class="w-100">
                                    <input type="submit" name="submit" class="form-control bg-warning" value="Login">
                                </div>
                                </div>
                            </form>
                            
                        </div>



<?php
include 'footer.php';
?>