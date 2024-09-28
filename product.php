<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Designed & Developed By Xtreme Digital Solutions Pvt. Ltd. | Developer: Ruchi Kesarwani">
    <title>Products | Grow Planters</title>

    <?php include "plugin/header.php";
    ?>

    <!-- Header Section -->
    <section class="about-header-bg">
        <div class="container text-center">

            <h2 class="fw-bold text-uppercase">Products</h2>
            <p class="text-muted"><a class="header2-link text-muted">Home</a><span class="px-2 fs-5 text-green">∎</span><a>Products</a></p>

        </div>
    </section>
    <!-- Header Section Ends -->


    <!-- Product Section -->
    <section class="my-5">
        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-12 my-2">

                    <div class="text-center">
                        <h4 class="fw-bold text-muted">Categories</h4>
                        <hr class="carousel-hr m-auto" />
                    </div>

                    <span class="cat-text" onclick="filterSelection('filterDiv')"><i class="fa-solid pe-1 fa-angle-right"></i>All</span>
                    <hr class="my-2" />
                    <span class="cat-text" onclick="filterSelection('pots')"><i class="fa-solid pe-1 fa-angle-right"></i>Pots</span>
                    <hr class="my-2" />
                    <span class="cat-text" onclick="filterSelection('basket')"><i class="fa-solid pe-1 fa-angle-right"></i>Baskets</span>
                    <hr class="my-2" />
                    <span class="cat-text" onclick="filterSelection('tower')"><i class="fa-solid pe-1 fa-angle-right"></i>Tower Pots</span>
                </div>


                <div class="col-lg-9 col-md-9 col-12 my-2">

                <?php include "plugin/pots.php";
                ?>

                </div>


            </div>
            <!-- Row Ends -->

        </div>
    </section>
    <!-- Product Section Ends -->


    <?php include "plugin/footer.php";
    ?>