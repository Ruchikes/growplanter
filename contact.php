<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Designed & Developed By Xtreme Digital Solutions Pvt. Ltd. | Developer: Ruchi Kesarwani">
    <title>Contact | Grow Planters</title>

    <?php include "plugin/header.php";
    ?>

    <!-- Header Section -->
    <section class="about-header-bg">
        <div class="container text-center">

            <h2 class="fw-bold text-uppercase">Contact</h2>
            <p class="text-muted"><a class="header2-link text-muted">Home</a><span class="px-2 fs-5 text-green">∎</span><a>Contact</a></p>

        </div>
    </section>
    <!-- Header Section Ends -->


    <!-- Contact Section -->
    <section class="my-5">
        <div class="container">

            <div class="contact-area">
                <div class="row">

                    <div class="col-lg-4 col-12">
                        <div class="contact-left">
                            <h4 class="fw-bold">Contact Info</h4>
                            <p class="para-text">Use the given form to get in touch with our team</p>

                            <div class="mt-2 d-inline-flex">
                                <i class="fa-solid fa-phone contact-icon me-2"></i>
                                <a href="" class="header2-link text-light mt-2">+ 431 243 4678</a>
                            </div></br>

                            <div class="mt-2 d-inline-flex">
                                <i class="fa-regular fa-envelope contact-icon me-2"></i>
                                <a href="mailto:growplanter01@gmail.com" class="header2-link text-light mt-2">growplanter01@gmail.com</a>
                            </div></br>

                            <div class="mt-2 d-inline-flex">
                                <i class="fa-solid fa-location-dot contact-icon me-2"></i>
                                <a class="header2-link text-light mt-2">Nagloi New Delhi</a>
                            </div></br>

                        </div>
                    </div>

                    <div class="col-lg-8 col-12">
                        <form class="row g-3 my-4 px-4" action="sendmail.php" method="post">
                            <div class="col-md-6 my-3">
                                <input type="text" class="form-control" id="inputText4" name="fname" placeholder="First Name*" required>
                            </div>
                            <div class="col-md-6 my-3">
                                <input type="text" class="form-control" id="inputText4" name="lname" placeholder="Last Name*" required>
                            </div>
                            <div class="col-md-6 my-3">
                                <input type="tel" class="form-control" id="inputPhone4" name="phone" maxlength="10" placeholder="Phone*">
                            </div>
                            <div class="col-md-6 my-3">
                                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email*">
                            </div>
                            <div class="col-12 my-3">
                                <textarea input type="text" class="form-control" style="height: 8rem" id="inputText4" name="message" placeholder="Message*"></textarea>
                            </div>

                            <div class="col-12 my-3">  
                                <button type="submit" class="btn read-btn float-end" name="submit">Send Message</button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- Row Ends -->
            </div>

        </div>
    </section>
    <!-- Contact Section Ends -->


    <!-- Map Section -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28005.348535983907!2d77.04404134298335!3d28.669640941208367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0438728d3fc9%3A0x64e1eebb4ec4e142!2sNangloi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1720682999661!5m2!1sen!2sin" class="w-100" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- Map Section Ends -->


    <?php include "plugin/footer.php";
    ?>