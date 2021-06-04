<?php 
    session_start();
    include_once('header.php');
    require_once 'connect.php';
?>

<style>
<?php
include '../css/recipe-individual.css';
?>
</style>




  <!-- Heading -->

  <div class="container title">
    <?php
      $id = $_GET['id'];
      $r = mysqli_query($conn, "SELECT * FROM posts WHERE id = '" . $id. "'");
      $rowData = mysqli_fetch_array($r);
    ?>
    <div class="heading"><?php echo $rowData['title']; ?> <span class="veg-logo"> <img src="../images/veg-logo.png"></span></div>
    <div class="author-date">Uploaded By : <?php echo $rowData['username']; ?> | <?php echo $rowData['date']; ?></div>
    <div class="rating">4.5 Ratings
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star-half"></i>
    </div>
  </div>

  <!-- Heading End -->

  <!-- Image Section Start -->

  <div class="container">
    <div class="row">
      <div class="col-6 recipe-img">
        <img src="../images/<?php echo $rowData["imagefile"] ?> " alt="Chhole Bhature">
      </div>

      <div class="col-2 prep-info">

        <div><i class="fa fa-history prep-icon"></i> Total Time <b><?php echo $rowData['totaltime']?></b></div>
        <div><i class="fa fa-history prep-icon"></i> Prep Time <b><?php echo $rowData['preptime']?></b></div>
        <div><i class="fa fa-fire prep-icon"></i> Calories <b><?php echo $rowData['calories']?></b></div>
        <div class="share-btn">Click here to Share &nbsp; <i class="fa fa-btn fa-share-square"></i></div>
        <div class="bookmark-btn ">Bookmark Recipe &nbsp; <i class="fa fa-btn fa-bookmark"></i> </div>
      </div>
    </div>
  </div>


  <!-- Image Section End -->

  <!-- Recipe Section Starts -->
  <div class="container">
    <div class="about">
      <?php echo $rowData['about']; ?>
    </div>


    <div class="ingredients">
      <div class="ingredient-title">
        Ingredients of <?php echo $rowData['title']; ?>
      </div>

      <!-- List -->
      <?php $ingredients = explode(",", $rowData['ingredients']);?>
      <div class="ingredient-list">
        <div class="row">
          <div class="col">
            <ul class="list-group">
              <?php
                for($i = 0; $i < count($ingredients)/2; $i++) { ?>
                  <li class="list-group-item"><?php echo $ingredients[$i]; ?></li>
                <?php }
              ?>
            </ul>
          </div>
          <div class="col">
            <ul class="list-group">
              <?php
                for($i = count($ingredients)/2 + 1; $i < count($ingredients); $i++) { ?>
                  <li class="list-group-item"><?php echo $ingredients[$i]; ?></li>
                <?php }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Recipe Section Ends -->

  <!-- Steps start -->
  <div class=" container step-container">
    <div class="step-heading">How to make <?php echo $rowData['title']; ?>?</div>

    <!-- step 1 -->
    <div class="step">
      <div class="step-title">Step 1</div>
      <div class="step-info">
        <?php echo $rowData['step1']; ?>
      </div>
    </div>

    <!-- step 2 -->
    <div class="step">
      <div class="step-title">Step 2</div>
      <div class="step-info">
        <?php echo $rowData['step2']; ?>
      </div>
    </div>

      <!-- step 3 -->
      <div class="step">
      <div class="step-title">Step 3</div>
      <div class="step-info">
        <?php echo $rowData['step3']; ?>
      </div>
    </div>
          <!-- Steps end -->


          <!-- Tips start -->
          <?php $tips = explode(".", $rowData['tips']);?>
          <div class="tips container">
            Tips
          </div>
          <div class="tips-block">
            <ul>
            <?php
                for($i = 0; $i < count($tips); $i++) { ?>
                  <li><?php echo $tips[$i]; ?></li>
                <?php }
              ?>
            </ul>
          </div>
          <!-- Tips End -->

        </div>
      </div>
    </div>
  </div>

  <?php include_once('footer.php'); ?>

