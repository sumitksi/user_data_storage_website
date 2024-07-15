<?php

@include 'Config.php';

session_start();

if(!isset($_SESSION['user_name']))
{
   header('location:Login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>My website</title>

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>User</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>This is an User page</p>
      <a href="Information.php" class="btn">Complete your information</a>
      <a href="Feedback.php" class="btn">Give your feedback</a>
      <a href="Details.php" class="btn">Check your details</a>
      <a href="Logout.php" class="btn">Logout</a>
   </div>

</div>

</body>
</html>