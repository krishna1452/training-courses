<?php
include 'dbconfig.php';
?>
<?php
include 'header.php';
?>


<!DOCTYPE html>
<html lang="">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Training Courses</title>
    <meta name="description" content="">
    <!-- responsive tag -->
   

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Banner Section Start -->
        <div id="rs-banner" class="rs-banner style3">
            <div class="container pt-90 md-pt-50">
                <div class="banner-content pb-13">
                    <div class="row">
                        <div class="col-lg-7">
                            <h1 class="banner-title white-color wow fadeInLeft" data-wow-delay="300ms"
                                data-wow-duration="3000ms">People Expect to be Bored eLearning.</h1>
                            <div class="banner-desc white-color wow fadeInRight" data-wow-delay="500ms"
                                data-wow-duration="4000ms">Every act of conscious learning requires the willingness to
                                suffer an <br> injury to one’s self-esteem.</div>
                            <ul class="banner-btn wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2000ms">
                                <li><a class="readon3" href="#">Get Started</a></li>
                                <li><a class="readon3 active" href="#">Read More</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="banner-image hidden-md">
                        <div id="stuff">
                            <div data-depth="0.3">
                                <img src="assets/images/banner/bnr3-top.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Banner Section End -->

        <div class="bg-info text-white p-2">
            <marquee behavior="" direction="">
                <?php
                $query="select * from lnews";
                $eq=mysqli_query($con,$query);
                while($row=mysqli_fetch_array($eq)){
                    echo'
                    '.$row["lnews"].'
              
                ';
            }
                ?>
            </marquee>
        </div>

        <!-- About Section Start -->
        <div id="rs-about" class=" pt-50">
            <div class="container-fluid">
                <div class="container">
                 <div class="row">
                    <div class="col-md-8">
                        <h3>Welcome to <span class="text-danger"> Hyderabad IT Trainings</span></h3>
                        <p>Hyderabad IT Trainings is a Hyderabad based Training Institute delivering classroom and
                            online trainings in India, USA and UK, Australia. We are Providing high quality training is
                            our core value. We offer both classroom and online training on niche technologies which are
                            in high demand. All our trainers are IT professionals with rich experience.</p>

                        <p>Hyderabad IT Trainings is a leading training and placement company in hyderabad managed by
                            industry experts with more than 9+ years of experience in leading MNC Companies. We are
                            wellknown for our practical approach towards training that enables students to gain realtime
                            exposure.</p>

                        <p>Hyderabad IT Trainings is a one-stop shop for IT courses, Web Development services &
                            Recruitment services. Hyderabad IT Trainings concentrates on its vision of building up
                            strong client and business partnerships. To this end, Hyderabad IT Trainings offers
                            Real-time and placement focuses training services.</p>
                      </div>
                    
            
                        <div class="col-md-4 my-2">
                            
                            <form action="" method="">
                                <div class="mx-5" id="form">
                            <h2 class="text-center bg-success">Register Now</h2>
                                <div>
                                    <input type="text" name="name" placeholder="name" class="form-control  mb-3">
                                </div>
                                <div>
                                    <input type="text" name="email" placeholder="email" class="form-control mb-3">
                                </div>
                                <div>
                                    <input type="tel" name="phone" placeholder="number" class="form-control  mb-3">
                                </div>
                                <div>
                                    <textarea rows=4 name="message" placeholder="message" class="form-control mb-4"></textarea>
                                </div>
                                <div class="w-100">
                                    <input type="submit" name="submit" class="form-control bg-warning">
                                </div>
                                </div>
                            </form>
                            
                        </div>
                        
                    </div>
            </div>
        </div>
        
    <!-- About Section End -->

    <!-- Subject Categories Section Start -->
    <div class="rs-subject style1 pt-94 pb-70 md-pt-64 md-pb-40">
        <div class="container">
            <div class="sec-title mb-60 text-center md-mb-30">
                <h2 class="title mb-0">Our Courses</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="subject-wrap bgc1">
                        <img src="assets/images/subject/icons/1.png" alt="">
                        <h4 class="title"><a href="#">Genarel Education</a></h4>
                        <span class="course-qnty">05 Courses</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="subject-wrap bgc2 text-light">
                        <img src="assets/images/subject/icons/2.png" alt="">
                        <h4 class="title"><a href="#">Computer Science</a></h4>
                        <span class="course-qnty">05 Courses</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="subject-wrap bgc3">
                        <img src="assets/images/subject/icons/3.png" alt="">
                        <h4 class="title"><a href="#">Civil Engineering</a></h4>
                        <span class="course-qnty">05 Courses</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="subject-wrap bgc4">
                        <img src="assets/images/subject/icons/4.png" alt="">
                        <h4 class="title"><a href="#">Artificial Intelligence</a></h4>
                        <span class="course-qnty">05 Courses</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="subject-wrap bgc5">
                        <img src="assets/images/subject/icons/5.png" alt="">
                        <h4 class="title"><a href="#">Business Studies</a></h4>
                        <span class="course-qnty">05 Courses</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="subject-wrap bgc6">
                        <img src="assets/images/subject/icons/6.png" alt="">
                        <h4 class="title"><a href="#">Web Development</a></h4>
                        <span class="course-qnty">05 Courses</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subject Categories Section End -->

    <!-- Popular Course Section Start -->
    <section class="container-fluid" id="Batches">

            <h2 class="text-center">New <span class="text-danger">Batches</span></h2>
            <div class="table-responsive p-5">
                    <?php 
    $query="select * from courses";
    $eq=mysqli_query($con,$query);
    echo '
    <table class="table table-bordered text-justify table table-hover table-striped">
    <thead class=" table-dark">
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

    <!-- Testimonial Section Start -->
    <div class="rs-testimonial style3">
        <div class="container">
            <div class="sec-title mb-60 text-center md-mb-30">
                <div class="sub-title primary">Student Reviews</div>
                <h2 class="title mb-0">What Our Students Says</h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true"
                data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="2"
                data-md-device-nav="false" data-md-device-dots="true">
                <div class="testi-item">
                    <div class="row y-middle no-gutter">
                        <div class="col-md-4">
                            <div class="user-info">
                                <img src="assets/images/testimonial/style3/1.png" alt="">
                                <h4 class="name">Saiko Najran</h4>
                                <span class="designation">Student</span>
                                <ul class="ratings">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot
                                foresee the pain and trouble that are bound ensue and equal blame belongs to those who
                                fail in their duty.</div>
                        </div>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="row y-middle no-gutter">
                        <div class="col-md-4">
                            <div class="user-info">
                                <img src="assets/images/testimonial/style3/2.png" alt="">
                                <h4 class="name">Saiko Najran</h4>
                                <span class="designation">Student</span>
                                <ul class="ratings">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot
                                foresee the pain and trouble that are bound ensue and equal blame belongs to those who
                                fail in their duty.</div>
                        </div>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="row y-middle no-gutter">
                        <div class="col-md-4">
                            <div class="user-info">
                                <img src="assets/images/testimonial/style3/3.png" alt="">
                                <h4 class="name">Saiko Najran</h4>
                                <span class="designation">Student</span>
                                <ul class="ratings">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot
                                foresee the pain and trouble that are bound ensue and equal blame belongs to those who
                                fail in their duty.</div>
                        </div>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="row y-middle no-gutter">
                        <div class="col-md-4">
                            <div class="user-info">
                                <img src="assets/images/testimonial/style3/4.png" alt="">
                                <h4 class="name">Saiko Najran</h4>
                                <span class="designation">Student</span>
                                <ul class="ratings">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot
                                foresee the pain and trouble that are bound ensue and equal blame belongs to those who
                                fail in their duty.</div>
                        </div>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="row y-middle no-gutter">
                        <div class="col-md-4">
                            <div class="user-info">
                                <img src="assets/images/testimonial/style3/5.png" alt="">
                                <h4 class="name">Saiko Najran</h4>
                                <span class="designation">Student</span>
                                <ul class="ratings">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot
                                foresee the pain and trouble that are bound ensue and equal blame belongs to those who
                                fail in their duty.</div>
                        </div>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="row y-middle no-gutter">
                        <div class="col-md-4">
                            <div class="user-info">
                                <img src="assets/images/testimonial/style3/6.png" alt="">
                                <h4 class="name">Saiko Najran</h4>
                                <span class="designation">Student</span>
                                <ul class="ratings">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot
                                foresee the pain and trouble that are bound ensue and equal blame belongs to those who
                                fail in their duty.</div>
                        </div>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="row y-middle no-gutter">
                        <div class="col-md-4">
                            <div class="user-info">
                                <img src="assets/images/testimonial/style3/7.png" alt="">
                                <h4 class="name">Saiko Najran</h4>
                                <span class="designation">Student</span>
                                <ul class="ratings">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot
                                foresee the pain and trouble that are bound ensue and equal blame belongs to those who
                                fail in their duty.</div>
                        </div>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="row y-middle no-gutter">
                        <div class="col-md-4">
                            <div class="user-info">
                                <img src="assets/images/testimonial/style3/8.png" alt="">
                                <h4 class="name">Saiko Najran</h4>
                                <span class="designation">Student</span>
                                <ul class="ratings">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot
                                foresee the pain and trouble that are bound ensue and equal blame belongs to those who
                                fail in their duty.</div>
                        </div>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="row y-middle no-gutter">
                        <div class="col-md-4">
                            <div class="user-info">
                                <img src="assets/images/testimonial/style3/9.png" alt="">
                                <h4 class="name">Saiko Najran</h4>
                                <span class="designation">Student</span>
                                <ul class="ratings">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot
                                foresee the pain and trouble that are bound ensue and equal blame belongs to those who
                                fail in their duty.</div>
                        </div>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="row y-middle no-gutter">
                        <div class="col-md-4">
                            <div class="user-info">
                                <img src="assets/images/testimonial/style3/10.png" alt="">
                                <h4 class="name">Saiko Najran</h4>
                                <span class="designation">Student</span>
                                <ul class="ratings">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="desc">The charms of pleasure of the moment so blinded by desire that they cannot
                                foresee the pain and trouble that are bound ensue and equal blame belongs to those who
                                fail in their duty.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Blog Section Start -->
    <div id="rs-blog" class="rs-blog style1 modify1 pt-85 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title mb-60 md-mb-30 text-center">
                <div class="sub-title primary">News Update </div>
                <h2 class="title mb-0">Latest News & Events</h2>
            </div>
            <div class="row">
                <div class="col-lg-7 pr-60 md-pr-15 md-mb-30">
                    <div class="row no-gutter white-bg blog-item mb-35">
                        <div class="col-md-6">
                            <div class="image-part">
                                <a href="#"><img src="assets/images/blog/style3/1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">University While The Lovely Valley Team
                                        Work</a></h3>
                                <div class="btn-part">
                                    <a class="readon-arrow" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutter white-bg blog-item">
                        <div class="col-md-6 order-last">
                            <div class="image-part">
                                <a href="#"><img src="assets/images/blog/style3/2.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user-o"></i> Admin</li>
                                    <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                                </ul>
                                <h3 class="title"><a href="blog-single.html">High School Program Starting Soon 2021</a>
                                </h3>
                                <div class="btn-part">
                                    <a class="readon-arrow" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 lg-pl-0">
                    <div class="events-short mb-28">
                        <div class="date-part bgc1">
                            <span class="month">June</span>
                            <div class="date">20</div>
                        </div>
                        <div class="content-part">
                            <div class="categorie">
                                <a href="#">Math</a> & <a href="#">English</a>
                            </div>
                            <h4 class="title mb-0"><a href="blog-single.html">Educational Technology and Mobile
                                    Accessories Learning</a></h4>
                        </div>
                    </div>
                    <div class="events-short mb-28">
                        <div class="date-part bgc2">
                            <span class="month">June</span>
                            <div class="date">21</div>
                        </div>
                        <div class="content-part">
                            <div class="categorie">
                                <a href="#">Math</a> & <a href="#">English</a>
                            </div>
                            <h4 class="title mb-0"><a href="blog-single.html">Educational Technology and Mobile
                                    Accessories Learning</a></h4>
                        </div>
                    </div>
                    <div class="events-short mb-28">
                        <div class="date-part bgc3">
                            <span class="month">June</span>
                            <div class="date">22</div>
                        </div>
                        <div class="content-part">
                            <div class="categorie">
                                <a href="#">Math</a> & <a href="#">English</a>
                            </div>
                            <h4 class="title mb-0"><a href="blog-single.html">Educational Technology and Mobile
                                    Accessories Learning</a></h4>
                        </div>
                    </div>
                    <div class="events-short">
                        <div class="date-part bgc4">
                            <span class="month">June</span>
                            <div class="date">23</div>
                        </div>
                        <div class="content-part">
                            <div class="categorie">
                                <a href="#">Math</a> & <a href="#">English</a>
                            </div>
                            <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Accessories
                                    Learning</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->
    </div>
    <!-- Main content End -->

    <?php
    include 'footer.php';
    ?>