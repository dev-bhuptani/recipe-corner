<?php 
    session_start();
    include_once('header.php'); 
?>

<style>
<?php
include '../css/recipe-categories.css';
?>
</style>



 <!-- Page header start -->
 <header class="page-header shadow bg-img bg-overlay container-fluid my-5">
        <div class="row h-100 align-items-center">
            <div class="page-header-title align-self-end align-self-md-center col-12 col-md-7 col-lg-8">
                <h1 class="display-5 text-center text-white">Explore Recipes</h1>
            </div>

            <div class="search-bar col-12 col-md-5 col-lg-4 px-3 px-sm-5 px-md-4">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search Recipes">
                    <div class="input-group-append">
                        <button class="btn btn-search" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Page header end -->

    <!-- Main content of the page (categories) start -->
    <main class="categories container">
        <!-- Category 1 start -->
        <section class="category">
            <h2 class="category-title text-center">C u i s i n e s</h2>

            <div class="row">
                <div class="sub-category p-4 col-12 col-sm-6 col-md-3">
                    <a href="sub-category.php" class="more-recipes-link">
                        <img src="../images/punjabi-food.jpg" alt="" class="mx-auto d-block">

                        <h3 class="text-center mt-3">Punjabi</h3>
                    </a>
                </div>

                <div class="sub-category p-4 col-12 col-sm-6 col-md-3">
                    <a href="sub-category.php" class="more-recipes-link">
                        <img src="../images/punjabi-food.jpg" alt="" class="mx-auto d-block">

                        <h3 class="text-center mt-3">Gujarati</h3>
                    </a>
                </div>

                <div class="sub-category p-4 col-12 col-sm-6 col-md-3">
                    <a href="sub-category.php" class="more-recipes-link">
                        <img src="../images/punjabi-food.jpg" alt="" class="mx-auto d-block">

                        <h3 class="text-center mt-3">Italian</h3>
                    </a>
                </div>

                <div class="p-4 col-12 col-sm-6 col-md-3 my-5" style="position: relative;">
                    <a href="sub-category.php" class="more-recipes-link">
                        <div class="more-recipes text-center">
                            <span class="fa fa-plus more-recipes-icon p-2"></span>
                            <p class="more-recipes-text">More recipes</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- Category 1 end -->

        <!-- Category 2 start -->
        <section class="category">
            <h2 class="category-title text-center">H e a l t h y</h2>

            <div class="row">
                <div class="sub-category p-4 col-12 col-sm-6 col-md-3">
                    <a href="sub-category.php" class="more-recipes-link">
                        <img src="../images/healthy.jpg" alt="" class="mx-auto d-block">

                        <h3 class="text-center mt-3">Low Carb</h3>
                    </a>
                </div>

                <div class="sub-category p-4 col-12 col-sm-6 col-md-3">
                    <a href="sub-category.php" class="more-recipes-link">
                        <img src="../images/healthy.jpg" alt="" class="mx-auto d-block">

                        <h3 class="text-center mt-3">Low Calorie</h3>
                    </a>
                </div>

                <div class="sub-category p-4 col-12 col-sm-6 col-md-3">
                    <a href="sub-category.php" class="more-recipes-link">
                        <img src="../images/healthy.jpg" alt="" class="mx-auto d-block">

                        <h3 class="text-center mt-3">High Fibre</h3>
                    </a>
                </div>

                <div class="p-4 col-12 col-sm-6 col-md-3 my-5" style="position: relative;">
                    <a href="sub-category.php" class="more-recipes-link">
                        <div class="more-recipes text-center">
                            <span class="fa fa-plus more-recipes-icon p-2"></span>
                            <p class="more-recipes-text">More recipes</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- Category 2 end -->

        <!-- Category 3 start -->
        <section class="category">
            <h2 class="category-title text-center">D e s s e r t s</h2>

            <div class="row">                
                <div class="sub-category p-4 col-12 col-sm-6 col-md-3">
                    <a href="sub-category.php" class="more-recipes-link">
                        <img src="../images/cake.jpg" alt="" class="mx-auto d-block">

                        <h3 class="text-center mt-3">Cookies</h3>
                    </a>
                </div>

                <div class="sub-category p-4 col-12 col-sm-6 col-md-3">
                    <a href="sub-category.php" class="more-recipes-link">
                        <img src="../images/cake.jpg" alt="" class="mx-auto d-block">

                        <h3 class="text-center mt-3">Cakes</h3>
                    </a>
                </div>

                <div class="sub-category p-4 col-12 col-sm-6 col-md-3">
                    <a href="sub-category.php" class="more-recipes-link">
                        <img src="../images/cake.jpg" alt="" class="mx-auto d-block">

                        <h3 class="text-center mt-3">Ice Cream</h3>
                    </a>
                </div>

                <div class="p-4 col-12 col-sm-6 col-md-3 my-5" style="position: relative;">
                    <a href="sub-category.php" class="more-recipes-link">
                        <div class="more-recipes text-center">
                            <span class="fa fa-plus more-recipes-icon p-2"></span>
                            <p class="more-recipes-text">More recipes</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- Category 3 end -->
    </main>
    <!-- Main content of the page (categories) end -->
  <?php include_once('footer.php'); ?>