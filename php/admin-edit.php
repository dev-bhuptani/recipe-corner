<?php
    session_start();

	include_once('header.php');
    echo '<link rel="stylesheet" href="../css/add-recipe.css" type="text/css" />';
    require_once 'connect.php';
    
    // if(isset($_GET['id'])) {
    //     $id = $_GET['id'];
    // }

    // 
    if(count($_GET) > 0) {
    $r = mysqli_query($conn, "SELECT * FROM posts WHERE id = '" . $_GET['id']. "'");
    $rowData = mysqli_fetch_array($r);
    }
  
	if (isset($_POST['edit'])) {
        if(count($_POST) > 0) {
        $username = $_SESSION['name'];
        $id = $_SESSION['postid'];
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $image = mysqli_real_escape_string($conn, $_POST['image']);

        $totaltime = mysqli_real_escape_string($conn, $_POST['totaltime']);
        $preptime = mysqli_real_escape_string($conn, $_POST['preptime']);
        $calories = mysqli_real_escape_string($conn, $_POST['calories']);
        $about = mysqli_real_escape_string($conn, $_POST['about']);
        $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
        
        $step1 = mysqli_real_escape_string($conn, $_POST['step1']);
        $step2 = mysqli_real_escape_string($conn, $_POST['step2']);
        $step3 = mysqli_real_escape_string($conn, $_POST['step3']);
        $tips = mysqli_real_escape_string($conn, $_POST['tips']);

        echo $id;

        // header("Location")
        // imagefile={$image},
                            //  totaltime={$totaltime}, preptime={$preptime},
                            //  calories={$calories}, about = {$about}, ingredients ={$ingredients}, 
                            //  step1 = {$step1}, step2 ={$step2}, step3 = {$step3}, tips = {$tips} 
                            //  where id={$_SESSION['postid']}

        
            if (mysqli_query($conn, "UPDATE posts SET title = '".$title."',
                totaltime = '".$totaltime."', preptime = '".$preptime."', calories = '".$calories."', about = '".$about."',
                ingredients = '".$ingredients."', step1 = '".$step1."', step2 = '".$step2."', step3 = '".$step3."', tips = '".$tips."' WHERE id='".$id."' " )) {
                header("Location: admin.php");
                exit();
            }
        }
        
    }


?>

    <!-- Main content of the page (content-wrapper) start -->
    <main class="container content-wrapper shadow-lg mt-lg-4">
        <div class="row">
        <h1 class=" text-center mt-md-3" style="color: tomato; font-weight: bolder">Edit Recipe</h1>
            <section class="col-md-5 col-lg-5 col-sm-12 my-auto px-4 login-section">
                

                <form class="mt-md-0 mt-4" method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="<?php echo $rowData['title']; ?>">
                    </div>

                    <!-- <div class="mb-3">
                        <label for="image" class="form-label">Enter an image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div> -->

                    <div class="mb-3">
                        <label for="title" class="form-label">Total Time:</label>
                        <input type="text" name="totaltime" id="totaltime" class="form-control" value="<?php echo $rowData['totaltime']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Preparation Time:</label>
                        <input type="text" name="preptime" id="preptime" class="form-control" value="<?php echo $rowData['preptime']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Calories:</label>
                        <input type="text" name="calories" id="calories" class="form-control" value="<?php echo $rowData['calories']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">About Recipes:</label>
                        <textarea class="form-control" id="about" rows="3" name="about"><?php echo $rowData['about']; ?></textarea>
                    </div>

                   


                    

                        

            </section>

            <section class="col-md-7 col-lg-7">

                    <div class="mb-3">
                        <label for="step1" class="form-label">Ingredients:</label>
                        <textarea class="form-control" id="ingredients" rows="3" name="ingredients"><?php echo $rowData['ingredients']; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="step1" class="form-label">Enter Step 1:</label>
                        <textarea class="form-control" id="step1" rows="3" name="step1"><?php echo $rowData['step1']; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="step2" class="form-label">Enter Step 2:</label>
                        <textarea class="form-control" id="step2" rows="3" name="step2"><?php echo $rowData['step2']; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="step3" class="form-label">Enter Step 3:</label>
                        <textarea class="form-control" id="step3" rows="3" name="step3"><?php echo $rowData['step3']; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="tips" class="form-label">Write Some Tips:</label>
                        <textarea class="form-control" id="tips" rows="3" name="tips"><?php echo $rowData['tips']; ?></textarea>
                    </div>
            </section>
            <input type="submit" name="edit" id="submit" class="form-control btn mb-4 log-in-btn py-3" value="Edit recipe">
            </form>
        </div>
        </main>
    <!-- Main content of the page (content-wrapper) end -->
</body>
</html>