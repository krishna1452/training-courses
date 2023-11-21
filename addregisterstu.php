<?php
include 'dbconfig.php';
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
                    <h1 class="page-title">Register Now</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.php">Home</a>
                        </li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->     
            
<section class="container">
                <div class="row">
                    <div class="col-md-4 py-5">
                        <?php
                        include 'sidebar.php';
                        ?>
                    </div>
                    
                    <div class="col-md-8 py-5">
                    
                    <?php
                    $query="select * from register order by id desc";
                    $eq=mysqli_query($con,$query);
                    echo '
                    <table class="table table-bordered">
    <thead>
    <tr>
    <th>id</th>
    <th>fname</th>
    <th>lname</th>
    <th>email</th>
    <th>uname</th>
    <th>password</th>
    <th>confirm password</th>
    <th></th>
    <th></th>
    </tr>
    <tbody>   
                    ';
                    while($row=mysqli_fetch_array($eq)){
                        echo '
                        <tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['fname'].'</td>
        <td>'.$row['lname'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['uname'].'</td>
        <td>'.$row['password'].'</td>
        <td>'.$row['cpassword'].'</td>
        <td></td>
        </tr>
        ';

    }

    ?>
</tbody>
</table>
</div>
</div>
</section>




            <?php
            include 'footer.php';
            ?>