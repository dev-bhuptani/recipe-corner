<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon  -->
  <link rel="icon" href="../images/favIcon.png">
  <!-- <base href="/" /> -->

  <!-- FontAwesomeIcons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- CSS start -->
    <!-- Bootsrap Stylesheet-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- General Stylesheet -->
  <link rel="stylesheet" href="../maincss.css" type="text/css">
  <!-- CSS end -->

  <title>Recipe Corner</title>
</head>

<body>
  <!-- Navbar start -->
  <nav class="navbar navbar-expand-lg navbar-light shadow">
    <a class="navbar-brand" href="#"><img src="../images/logo.png"/></a> 

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span>
        <i class="fa fa-bars" style="color:black; font-size:30px;"></i>
      </span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-nav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="sub-category.php">Recipes</a>
        </li>

        <?php if (isset($_SESSION['u_id'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="add-recipe.php">Add Recipes</a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Add Recipes</a>
            </li>
        <?php } ?>

        <?php if (isset($_SESSION['u_id'])) { ?>
            <li class="nav-item dropdown">
                <div href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    Welcome, <?php echo $_SESSION['name']; ?>
                </div>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="logout.php">Logout</a>                   
                </div>
            </li>
        <?php } else { ?>
            <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="sign-up.php">Sign Up</a>
            </li>
        <?php } ?>

      </ul>
    </div>
  </nav>
  <!-- Navbar end -->