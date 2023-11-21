<?php
include 'dbconfig.php';
?>

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
                    <h1 class="page-title">Batches</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.php">Home</a>
                        </li>
                        <li>Batches</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

<!-- Popular Course Section Start -->
<section class="container-fluid p-5" id="Batches">

<h2 class="text-center">New <span class="text-danger">Batches</span></h2>
<div class="table-responsive p-2">
    <?php
    $query="select * from courses";
    $eq=mysqli_query($con,$query);
    echo '
    <table class="table table-bordered">
    <thead class="table table-dark">
    <tr>
    <th>id</th>
    <th>course name</th>
    <th>trainer name</th>
    <th>date</th>
    <th>time</th>
    <th>duration</th>
    <th></th>
    <tr>
    <tbody>
    ';
    while($row=mysqli_fetch_array($eq)){
        echo '
        <tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['cname'].'</td>
        <td>'.$row['tname'].'</td>
        <td>'.$row['date'].'</td>
        <td>'.$row['time'].'</td>
        <td>'.$row['duration'].'</td>
        <td>
        <a href="registersignin.php">Register</a>
        </td>
        ';
    }
    ?>
    </tbody>
</table>
</div>
</section>
<!-- Popular Course Section End -->





<?php
include 'footer.php';
?>