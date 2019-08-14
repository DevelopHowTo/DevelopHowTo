<?php
use PHPMailer\PHPMailer\PHPMailer;
require './phpmailer/vendor/autoload.php';
                                            if (array_key_exists('to', $_POST)) {
                                              $mail = new PHPMailer(true);
                                              $mail->isSMTP();
                                                                                  // Set mailer to use SMTP
                                              $mail->Host = 'smtp.zoho.com';  // Specify main and backup SMTP servers
                                              $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                              $mail->Username = 'contact@develophowto.com';                 // SMTP username
                                              $mail->Password = 'develophowto2018@Aa';                           // SMTP password
                                              $mail->SMTPSecure = 'ssl';                           // Enable TLS encryption, `ssl` also accepted
                                              $mail->Port = 465;                               // TCP port to connect to

                                              //Recipients
                                              $mail->setFrom('contact@develophowto.com',$_POST['name']);
                                              $mail->addAddress('aakash@develophowto.com');     // Add a recipient
                                              $mail->addReplyTo($_POST['email'],$_POST['name']);
                                              //Content
                                              $mail->isHTML(true);                                  // Set email format to HTML
                                              $mail->Subject = 'Registered for Workshop by'.$_POST['name'].' | DevelopHowTo';
                                              $mail->Body    = "Name:".$_POST['name']."<br/>Email:".$_POST['email']."<br/>Contact:".$_POST['telephone']."<br/>College Name:".$_POST['college_name']."<br/>Workshop Topics:".$_POST['wtopics']."<br/>Post in College:".$_POST['post'];
                                              $mail->send();
                                            }
?>

<?php include("./includes/header2.php"); ?>
    <main>

        <!-- ./Page header -->
        <header class="header section parallax image-background overlay gradient gradient-53 alpha-8 color-1" style="background-image: url('./img/bg/grid.jpg')">
            <div class="container overflow-hidden">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="display-4 color-1 light">Register for Workshop in your college?</h1>
                        <p class="lead bold">Register Below and we will contact you soon.</p>
                        <h1 class="color-1"><span class="typed bold display-4 display-md-3"></span></h1>
                        <nav class="nav mt-5"><a href="developerscup.php" class="nav-link btn btn btn-rounded btn-1 btn-lg px-5 bold">Get WorkShop</a></nav>
                    </div>
                </div>
            </div>
        </header><!-- ./ New Integration API -->
        <div class="container-fluid py-3 demo-blocks">
            <!-- ./Contact -->
            <section class="section block bg-1">
                <div class="container py-4">
                    <div class="row gap-y">
                        <div class="col-12 col-md-6">
                            <div class="section-heading">
                                <p>Want Workshops in Your College?</p>
                                <h2 class="font-md bold">Apply for any workshop and we will get back to you.</h2>
                            </div>
                            <p class="lead mb-5">Don't hesitate to get in contact with us no matter your request. We are here to help you.</p>
                            <ul class="list-unstyled list-icon">
                                <li><i class="fas fa-envelope color-accent"></i>
                                    <p><a href="mailto:contact@develophowto.com">contact@develophowto.com</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6">
                            <form  method="post" class="form form-contact" data-response-message-animation="slide-in-up">
                            	<label for="to" hidden></label>
                            	<div class="form-group"><label for="full_name" class="bold mb-0">Full Name</label><input type="name" name="name" class="form-control bg-1" placeholder="Full Name" required></div>
                                <div class="form-group"><label for="contact_email" class="bold mb-0">Email address</label> <small id="emailHelp" class="form-text color-2 mt-0 mb-2 italic">We'll never share your email with anyone else.</small> <input type="email" name="email" id="contact_email" class="form-control bg-1" placeholder="Valid Email" required></div>
                                <div class="form-group"><label for="contact_no" class="bold mb-0">Contact No</label> <small id="emailHelp" class="form-text color-2 mt-0 mb-2 italic">We'll never share your Contact with anyone else.</small> <input type="text" name="telephone" id="contact_email" class="form-control bg-1" placeholder="Valid Phone no." required></div>
                                <div class="form-group"><label for="college" class="bold">College</label> <input type="text" name="college_name" id="contact_subject" class="form-control bg-1" placeholder="College Name" required></div>
                                <div class="form-group"><label for="workshop_topics" class="bold">Workshop Topic</label><select id="contact_subject" class="form-control bg-1" name="wtopics">
								  <option value="Internet of Things (IOT)">Internet of Things (IOT)</option>
								  <option value="Web Development">Web Development</option>
								  <option value="Digital Marketing">Digital Marketing</option>
								  <option value="Data Science & Machine Learning">Data Science & Machine Learning</option>
								  <option value="Android">Android</option>
								  <option value="Graphic Designing">Graphic Designing</option>
								</select></div>
								<div class="form-group"><label for="workshop_topics" class="bold">Post?</label><select id="contact_subject" class="form-control bg-1" name="post">
								  <option value="Internet of Things (IOT)">Faculty</option>
								  <option value="Web Development">Student</option>
								</select></div>
								 <label hidden><input name="to" id="to" hidden></label><br>
								 <div class="form-group"><button id="contact-submit" onclick="location.href = './contact_result.php';" data-loading-text="Sending..." name="submit" type="submit" class="btn btn-accent btn-rounded">Send Message</button></div>
                            </form>
                            <div class="response-message"><div class="section-heading"><i class="fas fa-check font-lg"></i><p class="font-md m-0">Thank you!</p><p class="response">Your message has been send, we will contact you as soon as possible.</p></div></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main>
    <? include("./includes/footer1.php"); ?>