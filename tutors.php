test
<?php include("./includes/header2.php"); ?>
    <main>

        <!-- ./Page header -->
        <header class="header section parallax image-background overlay gradient gradient-53 alpha-8 color-1" style="background-image: url('img/bg/grid.jpg')">
            <div class="container overflow-hidden">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="display-4 color-1 light">Development Events</h1>
                        <p class="lead bold">Participate in the event happening near you by DevelopHowTo Development Program.</p>
                        <h1 class="color-1"><span class="typed bold display-4 display-md-3"></span></h1>
                        <!--nav class="nav mt-5"><a href="developerscup.php" class="nav-link btn btn btn-rounded btn-1 btn-lg px-5 bold">Register for Developers Cup</a></nav-->
                    </div>
                </div>
            </div>
        </header><!-- ./ New Integration API -->
        <section class="section bg-5">
            <div class="container text-center pt-4 pb-7">
                <p class="color-1">We're proud to announce the DevelopHowTo Student Internship Program. <a href="https://5studios.net/themes/dashcore/blog-post.html" class="bold d-inline-flex align-items-center color-1 ml-3">Learn more <i class="pe pe-7s-angle-right"></i></a></p>
            </div>
        </section><br><br><hr>
        <section class="section features-carousel b-b">
            <div class="container pt-0">
                <center><h2 class="bold">Events.</h2></center>
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
                      echo "<center><h2>No Events Available at this time.</h2><br><hr></center>";
                    }
                 ?>
            </div>
        </section>

    </main>
        <? include("./includes/footer1.php"); ?>
