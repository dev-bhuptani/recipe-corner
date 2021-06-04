<?php 
    session_start();
    include_once('header.php');
    require_once 'connect.php';
?>

<style>
<?php
include '../css/sub-category.css';
?>
</style>


<!-- Page header start -->
<section class="page-header shadow bg-img bg-overlay container-fluid my-5">
        <div class="row h-100 align-items-center">
            <div class="page-header-title align-self-end align-self-md-center col-12 col-md-7 col-lg-8">
                <h1 class="display-5 text-center text-white">All Recipes</h1>
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
    </section>
    <!-- Page header end -->

    <!-- Main content of the page (sub-category) start -->
    <main class="container">
        <section class="sub-category" id="punjabi">
            <div class="row">
                <?php 
                    $r = mysqli_query($conn, "SELECT * FROM posts ORDER BY id desc");
                    while($rowData = mysqli_fetch_array($r)) {
                    ?>
                        <div class="single-recipe col-12 col-sm-6 col-lg-4 p-4">
                            <a href="recipe-individual.php?id=<?php echo $rowData['id']; ?>">
                                <img src="../images/<?php echo $rowData["imagefile"] ?> " alt="" class="img-fluid recipe-img">
                            </a>
                    
                            <div class="recipe-content pt-3">
                                <a href="recipe-individual.php">
                                    <h3 class="text-center"> <?php echo $rowData['title']; ?></h3>
                                </a>

                                <p style="float: left;"><img src="../images/chef.png" alt="" class="chef-img">
                                    <?php echo $rowData['username']; ?>
                                </p>

                                <p style="float: right;"><?php echo $rowData['date']; ?></p>
                            </div>
                        </div>
                <?php    
                    }
                ?>                
        </section>
    </main>
    <!-- Main content of the page (sub-category) end -->

    <?php include_once('footer.php'); ?>