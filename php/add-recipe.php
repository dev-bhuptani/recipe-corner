<?php
    session_start();

	include_once('header.php');
    echo '<link rel="stylesheet" href="../css/add-recipe.css" type="text/css" />';
    require_once 'connect.php';
    
    // $username = "kajal";
    if(isset($_SESSION['u_id']) != "") {
        
        // header("Location: index.php");
        
    
    
	if (isset($_POST['add'])) {
        $username = $_SESSION['name'];
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
        
        if (mysqli_query($conn, "INSERT INTO posts(username, title, imagefile, totaltime , preptime,
                        calories, about, ingredients, step1, step2, step3, tips) 
            VALUES('" . $username . "', '" . $title . "', '" . $image . "', '" . $totaltime . "', '" . $preptime . "',
                    '" . $calories . "', '" . $about . "', '" . $ingredients . "',
                    '" . $step1 . "', '" . $step2 . "', '" . $step3 . "', '" . $tips . "')")) {
            header("Location: sub-category.php");
            exit();
	}
    }
    }
?>

    <!-- Main content of the page (content-wrapper) start -->
    <main class="container content-wrapper shadow-lg mt-lg-4">
        <div class="row">
        <h1 class=" text-center mt-md-3" style="color: tomato; font-weight: bolder">Add Recipe</h1>
            <section class="col-md-5 col-lg-5 col-sm-12 my-auto px-4 login-section">
                

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="mt-md-0 mt-4" method="post">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Enter an image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Total Time:</label>
                        <input type="text" name="totaltime" id="totaltime" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Preparation Time:</label>
                        <input type="text" name="preptime" id="preptime" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Calories:</label>
                        <input type="text" name="calories" id="calories" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">About Recipes:</label>
                        <textarea class="form-control" id="about" rows="3" name="about"></textarea>
                    </div>

                   


                    

                        

            </section>

            <section class="col-md-7 col-lg-7">

                    <div class="mb-3">
                        <label for="step1" class="form-label">Ingredients:</label>
                        <textarea class="form-control" id="ingredients" rows="3" name="ingredients"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="step1" class="form-label">Enter Step 1:</label>
                        <textarea class="form-control" id="step1" rows="3" name="step1"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="step2" class="form-label">Enter Step 2:</label>
                        <textarea class="form-control" id="step2" rows="3" name="step2"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="step3" class="form-label">Enter Step 3:</label>
                        <textarea class="form-control" id="step3" rows="3" name="step3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="tips" class="form-label">Write Some Tips:</label>
                        <textarea class="form-control" id="tips" rows="3" name="tips"></textarea>
                    </div>
            </section>
            <input type="submit" name="add" id="submit" class="form-control btn mb-4 log-in-btn py-3" value="Add recipe">
            </form>
        </div>
        </main>
    <!-- Main content of the page (content-wrapper) end -->
</body>
</html>