<?php 
    session_start();
    include_once('adminheader.php');
    require_once 'connect.php';
?>

<style>
  <?php
    include '../css/admin.css';
    if (mysqli_query($conn, "DELETE from posts where id={$rowData['id']}" )) {
      // header("Location: sub-category.php");
      exit();
    }
  ?>
</style>

<main class="admin">
  <h1 class="display-1">ADMIN</h1>

  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Recipes</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $i = 1;
      $r = mysqli_query($conn, "SELECT * FROM posts");
      while($rowData = mysqli_fetch_array($r)) {
        $_SESSION['postid'] = $rowData['id'];
        echo $_SESSION['postid'];
    ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $rowData['title']; ?></td>
      <td> <a href="admin-edit.php?id=<?php echo $_SESSION['postid']; ?>"> <i class="fa fa-pencil"></i> </a></td>
      <td>
          <a href="delete.php?id=<?php echo $rowData['id']; ?>">
            <i class="fa fa-trash"></i>
          </a>
      </td>
    </tr>
    <?php $i++; } ?>
  </tbody>
</table>
</main>