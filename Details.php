<?php
    @include 'Config.php';

    if(isset($_POST['submit']))
    {
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $sql= "SELECT * FROM register WHERE email='$email'";
        $result= mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_assoc($result);
            echo $row["name"] . "<br>";
            echo $row["email"] . "<br>";
            echo $row["college"] . "<br>";
            echo $row["course"] . "<br>";
            echo $row["contact"] . "<br>";
            echo $row["dob"] . "<br>";
        }
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
   
<div class="form-container">

   <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
      <h3>Details</h3>
      
      <input type="email" name="email" required placeholder="Enter your email">
       
      <input type="submit" name="submit" value="Submit" class="form-btn">
   </form>

</div>

</body>
</html>