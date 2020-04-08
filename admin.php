<?php
// $_SESSION
if (isset($_POST['submit'])) {
  //session start
  session_start();
  $_SESSION['name'] = $_POST['name'];
  header('Location:calculate.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
  <link rel="icon" href="img/electric.png" type="image/png" sizes="16x16">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>
  <div class="container">
    <form class="white" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      <input type="text" name="name" placeholder="Enter the name of person">
      <input type="submit" name="submit" value="submit" class="btn teal lighten-2 z-depth-0">
    </form>
  </div>

  <?php include('templates/footer.php'); ?>
</body>

</html>