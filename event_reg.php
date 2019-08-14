<?php
include("./includes/header2.php");

if(isset($_GET['event_id'])) {
  $event_id = $_GET['event_id'];
  $views_query = "UPDATE `events` SET `views` = views + 1 WHERE `events`.`id` = $event_id";
  mysqli_query($link,$views_query);
  $query = "SELECT * FROM events where status = 'Active' and id = $event_id";
  $run = mysqli_query($link,$query);

  if(mysqli_num_rows($run) > 0) {
    $row = mysqli_fetch_array($run);
    $id = $row['id'];
    //$date = getdate($row['date']);
    //$day = $date['mday'];
    //$month = $date['month'];
    //$year = $date['year'];
    $title = $row['title'];
    $tags = $row['tag'];
    $overview = $row['overview'];
    $reg_fees = $row['reg_fees'];

  }else {
    header('location: index.php');
  }
}


?>
    <main>
        <header class="section color-1 fullscreen blog-single-header image-background" style="background-image: url('./img/blog/1.svg'); background-color: #464685;">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-10 mx-md-auto">
                        <h1 class="post-title display-4"><?php echo $title; ?></h1>
                        <span><?php echo $tags; ?></span>
                    </div>
                </div><a href="blog-post.html#blog-post" class="scrollto mt-auto">
                    <div class="arrow-down"><i class="pe pe-7s-angle-down pe-4x color-5"></i></div>
                </a>
            </div>
        </header>
        <section class="blog-post" id="blog-post">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <hr class="mb-5">
                        <p class="lead color-2 italic mb-5"><?php echo $overview; ?></p>
                        <blockquote class="blog-quote color-2 d-flex mx-auto">
                            <p>DevelopHowTo Development Program is great for anyone who is looking for a great Skill Development Events.</p>
                        </blockquote>
                        <p><strong>Registration Fees:</strong> ₹<a style="color:#000;"> <?php echo $reg_fees; ?></a></p><div class="form-group"><a id="contact-submit" href="w_s_w_online_reg_cehckout_page.php?ev_id=<?php echo $event_id; ?>"  class="btn btn-accent btn-rounded">Register for Workshop</a></div>
                    </div>
                </div>
            </div>
        </section><hr>
        <!--section>
            <div class="container py-5 b-t">
                <ul class="list-unstyled d-flex flex-wrap flex-row align-items-center">
                    <li class="mr-4"><i class="fas fa-tag color-2"></i></li>
                    <li><a href="blog-post.html#" class="badge badge-pill badge-outline-2 mr-2">app</a></li>
                    <li><a href="blog-post.html#" class="badge badge-pill badge-outline-2 mr-2">development</a></li>
                    <li><a href="blog-post.html#" class="badge badge-pill badge-outline-2 mr-2">software</a></li>
                    <li><a href="blog-post.html#" class="badge badge-pill badge-outline-2">startup</a></li>
                </ul>
                <ul class="list-unstyled d-flex flex-wrap flex-row align-items-center">
                    <li class="mr-4"><i class="fas fa-bookmark color-2"></i></li>
                    <li><a href="blog-post.html#" class="btn btn-circle btn-sm brand-twitter mr-3"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="blog-post.html#" class="btn btn-circle btn-sm brand-facebook mr-3"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="blog-post.html#" class="btn btn-circle btn-sm brand-google mr-3"><i class="fab fa-google-plus"></i></a></li>
                </ul>
            </div>
        </section-->
    </main>
    <? include("./includes/footer1.php"); ?>