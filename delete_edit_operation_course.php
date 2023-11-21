<?php
include 'dbconfig.php';

$sno=$_GET['val'];
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
                    <h1 class="page-title">Delete_Edit</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.php">Home</a>
                        </li>
                        <li>delete_edit</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <section class="container">
                <div class="row">
                    <div class="col-md-2 py-5">
                        <?php
                        include 'sidebar.php';
                        ?>
                    </div>
                    <div class="col-md-10 p-5">
                    <?php
    $query="select * from batches order by id";
    $eq=mysqli_query($con,$query);
    echo '
    <table class="table table-bordered">
    <thead>
    <tr>
    <th>id</th>
    <th>course name</th>
    <th>images</th>
    <th>cdesc</th>
    <th></th>
    <th></th>
    
    <tr>
    <tbody>
    ';
    while($row=mysqli_fetch_array($eq)){
        echo '
        <tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['cname'].'</td>
        <td><img src="uploadimages/'.$row['userpic'].'"></td>
        <td>'.$row['cdesc'].'</td>
        <td>
                        <a href="delete_operation_courses.php?opr=del&val='.$row['id'].'">
                        <button class="btn btn-danger">Delete</button></a>
                        </td>
                        <td>
                        <a href="delete_operation_courses.php?opr=edit&val='.$row['id'].'">
                        <button class="btn btn-warning">Edit</button></a>
                        </td>
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