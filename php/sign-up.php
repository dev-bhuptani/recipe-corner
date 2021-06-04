<?php

    include_once('header.php');
    echo '<link rel="stylesheet" href="../css/sign-up.css" type="text/css" />';
    require_once 'connect.php';

    if(isset($_SESSION['u_id']) != "") {
        header("Location: index.php");
    }

    $error_count = 0;

    if (isset($_POST['signup'])) {
        $name = mysqli_real_escape_string($conn, $_POST['full_name']);
        $mobile_no = mysqli_real_escape_string($conn, $_POST['mobile_no']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']); 
        $c_password = mysqli_real_escape_string($conn, $_POST['c_password']);

        if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
            $name_error = "Name must contain only alphabets and space";
            $error_count++;
        }
        if(strlen($mobile_no) < 10) {
            $mobile_no_error = "Mobile number must of 10 characters";
            $error_count++;
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please Enter Valid Email ID";
            $error_count++;
        }
        if(strlen($password) < 6) {
            $password_error = "Password must be minimum of 6 characters";
            $error_count++;
        }       
        if($password != $c_password) {
            $c_password_error = "Password and Confirm Password doesn't match";
            $error_count++;
        }
    
        if($error_count == 0) {
            $r = mysqli_query($conn, "SELECT email FROM users");
            while($rowData = mysqli_fetch_array($r)) {
                if($rowData['email'] == $email) {
                    $email_error = "This email is already registered.";
                    $error_count++;
                    break;
                }
            }
            if($error_count == 0) {
                if (mysqli_query($conn, "INSERT INTO users(name, mobile, email, password) VALUES('" . $name . "', '" . $mobile_no . "', '" . $email . "', '" . $password . "')")) {
                    header("location: login.php");
                    exit();
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            }
        }
        mysqli_close($conn);
    }

?>

    <!-- Main content of the page (content-wrapper) start -->
    <main class="container content-wrapper shadow-lg mt-5">
        <div class="row ">
            <section class="col-md-7 col-lg-5 d-none d-md-block px-0 display-image-section">
                <img src="../images/newSignup.gif" alt="" class="img-fluid">
            </section>

            <section class="col-md-5 col-lg-7 col-sm-12 my-auto px-4 sign-up-section">
                <h1 class="mt-3">SIGN UP</h1>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="mb-2">
                        <label for="full-name" class="form-label">Full name:</label>
                        <input type="text" name="full_name" id="full-name" class="form-control">
                        <?php if (isset($name_error)) echo '<span class="text-danger">' . $name_error . '</span>'; ?>
                    </div>

                    <div class="mb-2">
                        <label for="mobile-no" class="form-label">Mobile number:</label>
                        <input type="tel" name="mobile_no" id="mobile-no" class="form-control">
                        <?php if (isset($mobile_no_error)) echo '<span class="text-danger">' . $mobile_no_error . '</span>'; ?>
                    </div>

                    <div class="mb-2">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" id="email" class="form-control">
                        <?php if (isset($email_error)) echo '<span class="text-danger">' . $email_error . '</span>'; ?>
                    </div>

                    <div class="mb-2">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <?php if (isset($password_error)) echo '<span class="text-danger">' . $password_error . '</sapn>'; ?>
                    </div>

                    <div class="mb-2">
                        <label for="confirm-password" class="form-label">Re-enter password:</label>
                        <input type="password" name="c_password" id="confirm-password" class="form-control">
                        <?php if (isset($c_password_error)) echo '<span class="text-danger">' . $c_password_error . '</span>'; ?>
                    </div>

                    <!-- <p class="forgot-password mb-3"><a href="#">Forgot password?</a></p> -->

                    <input type="submit" name="signup" id="submit" class="form-control btn mb-2 sign-up-btn" value="Sign up">
                </form>

                <p class="login-text">Already have an account? <a href="login.php">Login!</a></p>
            </section>
        </div>
    </main>
    <!-- Main content of the page (wrapper) end -->

<?php include_once('footer.php'); ?>