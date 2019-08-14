<? include("./includes/header1.php"); ?>
    <main>
        <!-- ./Page header -->
        <header class="section header header-v6">
            <div class="shape-wrapper"><img src="img/v6/header/bg-shape.svg" class="main-background img-responsive" alt="">
                <div class="shape shape-background shape-top center-xy"></div>
                <div class="shape shape-background shape-right"></div>
            </div>
            <div class="container overflow-hidden">
                <div class="row gap-y">
                    <div class="col-md-7">
                        <p class="regular small text-uppercase color-2">Develop your Skills with DevelopHowTo <span>Development</span> Program.</p>
                        <h1 class="extra-bold display-md-3 font-md">DHT <span class="d-block light">Development Program</span></h1>
                        <p class="lead">Workshops / Seminar / Webinars / Projects</p>
                        <nav class="nav mt-5"><a href="events.php" class="nav-link mr-3 btn btn btn-rounded btn-outline-4 bw-2"><i class="fas fa-tag mr-3"></i> UpComing Events </a><a href="college_reg.php" class="nav-link btn btn-rounded btn-accent bw-2">Get Workshop</a></nav>
                    </div>
                </div>
            </div>
            <div class="main-shape-wrapper">
                <div data-aos="fade-left" data-aos-delay="300"><img src="img/v6/header/main-shape.svg" class="img-responsive main-shape" alt=""> <img src="img/v6/header/anim-1.svg" class="anim anim-1 floating" alt=""> <img src="img/v6/header/anim-1.svg" class="anim anim-2 floating" alt=""> <img src="img/v6/header/anim-1.svg" class="anim anim-3 floating" alt=""></div>
            </div>
        </header><!-- Features Carousel -->

        <?php include("./includes/domains.php"); ?>


         <section class="section bg-7  edge bottom-right">
            <div class="container bring-to-front">
                <div class="row gap-y align-items-center">
                    <div class="col-md-6">
                        <div class="shadow">
                            <img src="images/development_1.webp" class="img-responsive w-100" alt="Develophowto_MachineLearning_Iterative">
                        </div>
                    </div>
                    <div class="col-md-6 ml-md-auto text-center text-md-left">
                        <p class="badge badge-info text-uppercase">Developing</p>
                        <h2>What is DHT Development Program.</h2>
                        <p class="color-2">DevelopHowTo is an initiative to provide workshop and business services among its faculty, alumni and students. DevelopHowTo aims at nurturing entrepreneurship skills, create self-employment, product development, and manufacturing in line with the social objectives of Government of India. It is an innovative setup which will empower people of the region to start their own ventures. Our focus will be to energize entrepreneurship in academia through innovation. It is a platform on which we invite budding entrepreneurs, angel investors, venture capitalists, business tycoons, Students from every corner of the country under one roof. Through this event, we cater to the needs of budding Students by providing them with funding, exposure, cash rewards, incubation, and most importantly support.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section features-carousel b-b">
            <div class="container pt-0">
                <center><h2 class="bold">Register Now for our Upcoming Events.</h2></center>
                <?php
                $query = "SELECT * FROM events ORDER BY id DESC";
                $run = mysqli_query($link,$query);
                if(mysqli_num_rows($run) > 0){
                 ?>
                <div class="swiper-container" data-sw-show-items="4" data-sw-autoplay="3500000" data-sw-loop="true" data-sw-nav-arrows=".features-nav" data-sw-breakpoints='{"1024": {"slidesPerView": 4,"spaceBetween": 40},"992": {"slidesPerView": 3,"spaceBetween": 30},"768": {"slidesPerView": 2,"spaceBetween": 30},"576": {"slidesPerView": 1,"spaceBetween": 10}}'>
                    <div class="swiper-wrapper px-1">
                        <?php
                       while($row = mysqli_fetch_array($run)){
                         $id = $row['id'];
                         $title = ucfirst($row['title']);
                        $reg_fees = $row['reg_fees'];
                        $tags = $row['tag'];
                         $intro = ucfirst($row['intro']);
                      ?>
                        <div class="swiper-slide px-2 px-sm-1 py--4">
                            <a href="event_reg.php?event_id=<?php echo $id; ?>" style="color:#002;"><div class="card border-0 shadow">
                                <div class="card-body">
                                    <div class="rounded-circle bg-6 p-3 d-flex align-items-center justify-content-center shadow icon-xl"><img src="images/iot-svg.svg" class="img-responsive" alt=""></div>
                                    <h4 class="mt-4"><span style="font-size: 0.8em; color:purple;"><?php echo $tags; ?></span><br><span class="bold"><?php echo $title; ?></span></h4>
                                    <p><?php echo $intro; ?></p>
                                    <p><strong>Registration Fees</strong>: ₹ <?php echo $reg_fees; ?></p>
                                </div>
                            </div></a>
                        </div>
                        <?php } ?>
                    </div><!-- Add Arrows -->
                    <div class="accent features-nav features-nav-next"><span class="text-uppercase small">Next</span> <i class="features-nav-icon"></i></div>
                </div>
                <?php
                    }else {
                      echo "<center><h2>No Events Available at this time</h2><br><hr></center>";
                    }
                 ?>
            </div>
        </section>
        <section class="section">
            <div class="container-wide">
                <div class="row gap-y align-items-center text-center text-lg-left">
                    <div class="col-10 col-lg-4 mx-auto">
                        <h2>Get the very best of us by doing the best of you. Develop practical skills</h2>
                        <p class="lead color-2">Develop a passion for learning. If you do, you will never cease to grow!<br/> Your curriculum is missing a very important part - practical skills. You can still develop them easily with DevelopHowTo Development Program.</p>
                        <a href="events.php" class="btn btn-info btn-rounded mt-4">Find Events</a>
                    </div>
                    <div class="col-12 col-lg-6 pr-0"><img src="images/education_1.jpg" alt="" class="img-responsive shadow" data-aos="fade-left"></div>
                </div>
            </div>
        </section><!-- ./Single testimonial - Right -->
        <section class="singl-testimonial shadow">
            <div class="container-fluid py-0">
                <div class="row align-items-center gradient gradient-54 color-1">
                    <div class="col-md-3 mx-auto py-4 py-md-0">
                        <p class="text-uppercase mb-0 badge badge-1">Register Now</p>
                        <p class="font-md bold mt-1 color-1" style="font-family: 'Satisfy', cursive; font-size:20%;">Developers Cup</p>
                        <p class="font-md bold mt-1 color-1" style="font-family: 'Vidaloka', serif;">DevelopHowto is hosting its first Developers Cup in India for College Students.</p>
                        <a href="developerscup.php" style="font-color:#fff;">Learn More</a>
                        <hr class="my-4">
                        <div class="small color-1"><span class="bold d-block">DevelopHowto.inc Team,</span>© 2018</div>
                    </div>
                    <div class="col-12 col-md-7 image-background cover" style="background-image: url(img/testimonials/3.jpg);"></div>
                </div>
            </div>
        </section><!-- ./Features - hover animated -->
        <section class="section extending-core">
            <div class="shape shape-background top shape-left bg-6"></div>
            <div class="container">
                <div class="row gap-y align-items-center">
                    <div class="col-lg-6">
                        <div class="section-heading">
                            <p class="accent bold small text-uppercase">Student Development</p>
                            <h2>Extend DHT Development Program</h2>
                            <p>Extend DevelopHowTo Development Program in your college/School, Our experts will visit your campus and provide hands-on training on the domain of your choice.</p>
                        </div><a href="college_reg.php" class="btn btn-rounded btn-outline-1 bw-2 bold gradient gradient-43 color-1">Register your college</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="icons-wrapper position-relative">
                            <div class="floating icon icon-xxl bg-1 rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 60%; top: -10%;" data-aos="fade-left"><img src="img/integration/dockbit.svg" class="img-responsive" alt=""></div>
                            <div class="floating icon icon-xxl bg-1 rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 25%; top: 0%;" data-aos="fade-left"><img src="img/integration/zapier.svg" class="img-responsive" alt=""></div>
                            <div class="floating icon icon-2xl bg-1 rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 0%; top: 50%;" data-aos="fade-left"><img src="img/integration/bitnami.svg" class="img-responsive" alt=""></div>
                            <div class="floating icon icon-2xxl bg-1 rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 23%; top: 70%;" data-aos="fade-left"><img src="img/integration/slack.svg" class="img-responsive" alt=""></div>
                            <div class="floating icon icon-xxl bg-1 rounded-circle p-3 shadow m-0 absolute d-flex justify-content-center align-items-center" style="left: 65%; top: 44%;" data-aos="fade-left"><img src="img/integration/dropbox.svg" class="img-responsive" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><br/><br/>
        <hr>
         <section class="singl-testimonial shadow">
            <div class="container-fluid py-0">
                <div class="row align-items-center gradient gradient-54 color-1">
                    <div class="col-md-7 image-background cover center-top" style="background-image: url(img/av1.jpg);"></div>
                    <div class="col-md-3 mx-auto py-4 py-md-0">
                        <blockquote class="bold mt-1 color-1">You have to see failure as the beginning and the middle, but never entertain it as an end. <span class="bold">DevelopHowTo, Development Program</span> is the perfect Place for students and teachers to learn new skills and start developing something new.</blockquote>
                        <hr class="my-4">
                        <div class="small color-1"><span class="bold d-block">Shivam Kumar,</span> COO & Co-Founder of DevelopHowTo LLC.</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section bg-6">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Do you have <span class="bold">questions</span></h2>
                        <p class="lead">Not sure how this Program can help you? Wonder why you need any type of workshops in your college?</p>
                        <p class="text-muted">Here are the answers to some of the most common questions we hear from our appreciated Students</p>
                    </div>
                    <div class="col-md-8">
                        <div class="accordion accordion-clean" id="common-faqs-accordion">
                            <div class="card mb-3">
                                <div class="card-header"><a href="corporate.html#" class="card-title btn" data-toggle="collapse" data-target="#q1">What is DevelopHowTo Development Program?</a></div>
                                <div id="q1" class="collapse show" data-parent="#common-faqs-accordion">
                                    <div class="card-body">It is an innovative setup which will empower people of the region to start their own ventures. Our focus will be to energize entrepreneurship in academia through innovation. It is a platform on which we invite budding entrepreneurs, angel investors, venture capitalists, business tycoons, Students from every corner of the country under one roof.</div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header"><a href="corporate.html#" class="card-title btn" data-toggle="collapse" data-target="#q2">Why you need Workshops/Seminars/Webinars in your Colleges & Schools?</a></div>
                                <div id="q2" class="collapse" data-parent="#common-faqs-accordion">
                                    <div class="card-body">The workshop helps you to know about your field of interest. It gives you the right direction which your four-year course never provides you with. As you all know the books which are being used in the daily curriculum have limited knowledge.<br><br>Whereas workshops link you to new technology which helps you generate new ideas and it becomes your passion in a few days when you get fully involved in it.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header"><a href="corporate.html#" class="card-title btn" data-toggle="collapse" data-target="#q4">Can I Join DevelopHowTo?</a></div>
                                <div id="q4" class="collapse" data-parent="#common-faqs-accordion">
                                    <div class="card-body">Definitely <span class="bold">Yes</span>, you can contact us to let us know your Intrest. You can join us as a Mentor, Tutor, Developer, Campus Ambassador.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section bg-6">
            <div class="container bring-to-front py-0">
                <div class="shadow bg-1 p-5 rounded">
                    <div class="testimonials-slider">
                        <div class="swiper-container pb-5">
                            <div class="swiper-wrapper text-center w-50">
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-center"><img src="images/YiYeZhang-1-3-768x768.png" style="width:150px;" alt="" class="rounded-circle shadow mb-4">
                                        <p class="w-75 lead mt-3">By becoming who I am with the help of DevelopHowTo Development Program, I now happily serve hundreds of people in more than 10 countries.</p>
                                        <hr class="w-50">
                                        <footer><cite class="bold accent text-capitalize">— YIYE ZHANG,</cite> <span class="small color-2 mt-0">Intuitive & Abundance Guide For Spiritual Entrepreneurs <br>United Kingdom</span></footer>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column align-items-center"><img src="img/avatar/2.jpg" alt="" class="rounded-circle shadow mb-4">
                                        <p class="w-75 lead mt-3">I recently organised a workshop in my School & the feedback was amazing. Unique ID certificates, online study materials & workshop feedback data given by DevelopHowTo Development Program was really impressive.</p>
                                        <hr class="w-50">
                                        <footer><cite class="bold accent text-capitalize">— OGUNLEYE EMMANUEL FEMI,</cite> <span class="small color-2 mt-0">Federal University of Technology Akure</span></footer>
                                    </div>
                                </div>
                            </div><!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section bg-1 edge top-left b-b">
            <div class="container pt-5">
                <div class="d-flex align-items-center flex-column flex-md-row">
                    <div class="text-center text-md-left">
                        <p class="light mb-0 accent lead">Intrested in Joining our team?</p>
                        <h2 class="mt-0">Start teaching students with us!</h2>
                    </div><a href="register.html" class="btn btn-accent btn-rounded mt-3 mt-md-0 ml-md-auto">Join Now</a>
                </div>
            </div>
        </section>
    </main>
<? include("./includes/footer1.php"); ?>
