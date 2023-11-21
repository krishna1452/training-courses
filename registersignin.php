<?php
include 'dbconfig.php';
if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="select * from register where email='$email'  and password='$password'";
$eq=mysqli_query($con,$query);
while($row=mysqli_fetch_array($eq)){


if(mysqli_num_rows($eq)>0){
if($email=='$row["email"]' or $password=='$row["$password"]'){
    echo  header("location.href:index.php");
}else{
    echo '<script>alert(" you have a no account.please sign in...");</script>';
}
    }else{
        echo '<script>alert("invalid username and password");</script>';
     }
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
                    <h1 class="page-title">My Account</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.php">Home</a>
                        </li>
                        <li>Sign In</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->     
            <!-- My Account Section Start -->
    		<div class="rs-login pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="noticed">
                        <div class="main-part">                           
                            <div class="method-account">
                                <h2 class="login">Login</h2>
                                <form method="post" action="">
                                    <input type="email" name="email" placeholder="E-mail" required="">
                                    <input type="password" name="password" placeholder="Password" required="">
                                    <button type="submit" name="submit" class="readon submit-btn">login</button>
                                    <div class="last-password">
                                        <p>Not registered? <a href="register_signup.php">Create an account</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- My Account Section End -->  





            <?php
            include 'footer.php';
            ?>

