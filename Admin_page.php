<?php

@include 'Config.php';

session_start();

if(!isset($_SESSION['admin_name']))
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
      <h3>Hi, <span>Admin</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>This is an Admin page</p>
      <a href="Pensinfo.html" class="btn">Pensinfo</a>
      <a href="Reports.html" class="btn">Reports</a>
      <a href="Logout.php" class="btn">Logout</a>
   </div>

</div>

</body>
</html>