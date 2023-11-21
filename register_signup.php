<?php
include 'dbconfig.php';

if(isset($_POST['submit'])){

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    //echo"$fname","$lname","$email","$uname","$password","$cpassword";
    $query="insert into register(fname,lname,email,uname,password,cpassword)values('$fname','$lname','$email','$uname','$password','$cpassword')";
$eq=mysqli_query($con,$query);
    if($eq){
        echo "<script>alert('accont added&created success...');
        location.href='registersignin.php';
        </script>";
    }else{
      echo "<script>alert('unable to add the accoount');</script>";
    }
  
}
?>
<?php
include 'header.php';
?>
 <!-- Breadcrumbs Start -->
 <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Signin Now</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.php">Home</a>
                        </li>
                        <li>Signin</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->     
            
<section class="container">
                <div class="row">
                    
                    <div class="col-md-12 py-5">
                    <form method="post" action="" class="shadow w-50">  
                        <div>
                        <input type="text" name="fname" placeholder="first name" class="form-control w-100 mb-3 border-0">
                        </div> 
                        <div>
                        <input type="text" name="lname" placeholder="last name" class="form-control w-100 mb-3 border-0">
                        </div> 
                        <div>
                        <input type="email" name="email" placeholder="email" class="form-control w-100 mb-3 border-0">
                        </div> 
                        <div>
                        <input type="text" name="uname" placeholder="user name" class="form-control w-100 mb-3 border-0">
                        </div> 
                        <div>
                        <input type="password" name="password" placeholder="password" class="form-control w-100 mb-3 border-0">
                        </div> 
                        <div>
                        <input type="password" name="cpassword" placeholder="confirm password" class="form-control w-100 mb-3 border-0">
                        </div> 
                        <div>
                        <input type="submit" name="submit" value="Sign Up" class="form-control w-25 mb-4 bg-warning border-0">
                        </div> 
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="users">Already have an account? <a href="signin.php">Sign In</a></div>
                                    </div>
                                                
                    </form>        
                       
</div>
</div>
</section>




            <?php
            include 'footer.php';
            ?>