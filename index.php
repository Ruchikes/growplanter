<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Designed & Developed By Xtreme Digital Solutions Pvt. Ltd. | Developer: Ruchi Kesarwani">
    <title>Grow Planters</title>

    <?php include "plugin/header.php";
    ?>

    <!-- Carousel Section -->
    <section>
        <div class="row">

            <div class="col-lg-6 col-md-6 col-12 carousel-left">
                <div class="animate__animated animate__slideInUp animate__slow">
                    <h1 class="text-uppercase fw-bold">Grow Planter</h1>
                    <hr class="carousel-hr" />
                    <h5 class="my-4">Bring Life to your Living Spaces</h5>
                    <button class="btn read-btn" onclick="location.href='about.php';">Discover More</button>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12 order-first order-lg-last order-md-last animate__animated animate__fadeIn animate__slow">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/slider1.webp" class="d-block w-100" alt="Slider Image">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/slider2.webp" class="d-block w-100" alt="Slider Image">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
        <!-- Row Ends -->
    </section>
    <!-- Carousel Section Ends -->


    <!-- Banner Section -->
    <section class="my-5">
        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-12 my-2">
                    <div class="banner-area">
                        <img src='assets/images/flower-pot.jpeg' class="img-fluid" />
                        <div class="banner-text-center">
                            <h4>New Collection</h4>
                            <h2 class="fw-bold">Flower Pots</h2>
                            <button class="btn read-btn py-2 px-4" onclick="location.href='product.php';">Shop Now</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 my-2">
                    <div class="banner-area mb-3">
                        <img src='assets/images/flower-basket.webp' class="img-fluid" />
                        <div class="banner-text">
                            <h2 class="fw-bold">Flower Basket</h2>
                            <button class="btn read-btn py-2 px-4" onclick="location.href='product.php';">Shop Now</button>
                        </div>
                    </div>

                    <div class="banner-area mb-3">
                        <img src='assets/images/flower-tower.webp' class="img-fluid" />
                        <div class="banner-text">
                            <h2 class="fw-bold">Flower Tower</h2>
                            <button class="btn read-btn py-2 px-4" onclick="location.href='product.php';">Shop Now</button>
                        </div>
                    </div>

                </div>

            </div>
            <!-- Row Ends -->

        </div>
    </section>
    <!-- Banner Section Ends -->


    <!-- Products Section -->
    <section class="my-5">
        <div class="container text-center">

            <div class="d-inline-flex">
                <hr class="carousel-hr" />
                <h3 class="text-uppercase fw-bold px-3">Our Products</h3>
                <hr class="carousel-hr" />
            </div>

            <div id="myBtnContainer">
                <button class="profilter-btn my-2" onclick="filterSelection('pots')">Flower Pots</button>
                <button class="profilter-btn my-2" onclick="filterSelection('basket')">Baskets</button>
                <button class="profilter-btn my-2" onclick="filterSelection('tower')">Tower Pots</button>
            </div>

            <?php include "plugin/pots.php";
            ?>

        </div>
    </section>
    <!-- Products Section Ends -->


    <!-- Video Section -->
    <section class="my-5">
        <div class="container video-area">
            <img src='assets/images/video-bg.jpg' class="img-fluid banner-img" />
            <div class="video-content">
                <h2 class="fw-bold">Crafted Elegance for your Home</h2>
                <h6>Explore our collection and discover the perfect
                    blend of style and nature, customized for every plant lover needs.</h6>
                <button class="btn read-btn mt-3 py-2 px-4" onclick="location.href='blog.php';">Explore Blogs</button>
            </div>
        </div>
    </section>
    <!-- Video Section Ends -->


    <!-- Counter Section -->
    <section class="my-5">
        <div class="container">

            <div class="row text-center">

                <div class="col-lg-3 col-md-6 col-6 my-2">
                    <div class="counter-text"><span class="counter-num" data-count="100">100</span>%</div>
                    <h4>Eco Friendly</h4>
                </div>

                <div class="col-lg-3 col-md-6 col-6 my-2">
                    <div class="counter-text"><span class="counter-num" data-count="120">120</span>+</div>
                    <h4>Customers</h4>
                </div>

                <div class="col-lg-3 col-md-6 col-6 my-2">
                    <div class="counter-text"><span class="counter-num" data-count="10">10</span>+</div>
                    <h4>Experience</h4>
                </div>

                <div class="col-lg-3 col-md-6 col-6 my-2">
                    <div class="counter-text"><span class="counter-num" data-count="100">100</span>%</div>
                    <h4>Quality</h4>
                </div>

            </div>
            <!-- Row Ends -->

        </div>
    </section>
    <!-- Counter Section Ends -->


    <!-- Latest Product Section -->
    <section class="my-5">
        <div class="container text-center">

            <div class="d-inline-flex">
                <hr class="carousel-hr" />
                <h3 class="text-uppercase fw-bold px-3">New Arrivals</h3>
                <hr class="carousel-hr" />
            </div>
            <p>Check all our latest range of Products & get yours.</p>


            <div class="swiper mySwiper mt-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src='assets/images/pot/amrold-pot.webp' class="img-fluid" />
                        <h5 class="mt-3">Lorem Pot</h5>
                        <div class="text-yellow"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <img src='assets/images/basket/metal-pot-basket.jpg' class="img-fluid" />
                        <h5 class="mt-3">Lorem Basket</h5>
                        <div class="text-yellow"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <img src='assets/images/basket/hanging-pot-basket.jpg' class="img-fluid" />
                        <h5 class="mt-3">Lorem Hanging Basket</h5>
                        <div class="text-yellow"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <img src='assets/images/tower/moon-tower-pot.webp' class="img-fluid" />
                        <h5 class="mt-3">Lorem Tower Pot</h5>
                        <div class="text-yellow"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <img src='assets/images/pot/skyline-pot.webp' class="img-fluid" />
                        <h5 class="mt-3">Lorem Basket</h5>
                        <div class="text-yellow"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <img src='assets/images/pot/sunlite-pot.webp' class="img-fluid" />
                        <h5 class="mt-3">Lorem Pot</h5>
                        <div class="text-yellow"><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>

                </div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>


        </div>
    </section>
    <!-- Latest Product Section Ends -->


    <!-- Discount Banner Section -->
    <section class="my-5">
        <div class="container" style="position: relative;">
            <img src='assets/images/banner-bg.jpg' class="img-fluid banner-img" />
            <div class="video-content">
                <h4 class="text-green">Best Deals</h4>
                <h2 class="fw-bold text-dark w-75 my-3">Flower Pots & Baskets at Affordable Prices</h2>
                <button class="btn read-btn py-2 px-4" onclick="location.href='contact.php';">Shop Now</button>
            </div>
        </div>
    </section>
    <!-- Discount Banner Section Ends -->


    <!-- Testimonial Section -->
    <section class="my-5">
        <div class="container text-center">

            <div class="d-inline-flex">
                <hr class="carousel-hr" />
                <h3 class="text-uppercase fw-bold px-3">What Client Says</h3>
                <hr class="carousel-hr" />
            </div>
            <p>Check all our latest range of Products & get yours.</p>

            <div class="owl-carousel mt-4 owl-theme">
                <div class="item">
                    <div class="testimonial-area">
                        <i class="fa-solid fa-quote-left quote-icon"></i>
                        <img src='assets/images/testimonial-img.webp' class="img-fluid" />
                        <h6 class="mt-3 mb-0 text-uppercase">Client Name</h6>
                        <span>Client</span>
                        <p class="fst-italic mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt odit voluptates ullam?</p>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-area">
                        <i class="fa-solid fa-quote-left quote-icon"></i>
                        <img src='assets/images/testimonial-img.webp' class="img-fluid" />
                        <h6 class="mt-3 mb-0 text-uppercase">Client Name</h6>
                        <span>Client</span>
                        <p class="fst-italic mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt odit voluptates ullam?</p>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-area">
                        <i class="fa-solid fa-quote-left quote-icon"></i>
                        <img src='assets/images/testimonial-img.webp' class="img-fluid" />
                        <h6 class="mt-3 mb-0 text-uppercase">Client Name</h6>
                        <span>Client</span>
                        <p class="fst-italic mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt odit voluptates ullam?</p>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-area">
                        <i class="fa-solid fa-quote-left quote-icon"></i>
                        <img src='assets/images/testimonial-img.webp' class="img-fluid" />
                        <h6 class="mt-3 mb-0 text-uppercase">Client Name</h6>
                        <span>Client</span>
                        <p class="fst-italic mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt odit voluptates ullam?</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Testimonial Section Ends -->

    <?php include "plugin/footer.php";
    ?>