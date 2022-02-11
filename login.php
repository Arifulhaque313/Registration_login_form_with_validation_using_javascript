<?php
    include 'includes/db.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
</head>

<body>


  


  <div class="container">
    <div class="main_div">

   
    <center>
         <h2>Log in</h2>
     </center>

     <form action="" method="post"  class="form">
        
         <div class="form-contro">
             <label for="username">Email:</label>
             <input type="email" name="email" placeholder="a@florin-pop.com" >

             <small>Error message</small>
         </div>
         <div class="form-contro">
             <label for="username">Password:</label>
             <input type="password" name="password" placeholder="Password" >

             <small>Error message</small>
         </div>


       


         
         <button type="submit" name="submit">Login</button>
     </form>
     <center>   <a href="registration.php">Registration not yet?</a></center>
 </div>


 </div>





 <?php

       session_start();
       if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_query = "select * from users where email = '$email'";
        $email_result = mysqli_query($link,$email_query);

        while($row = mysqli_fetch_assoc($email_result)){
            $db_email = $row['email'];
            $db_password = $row['password'];
           
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['gender'] = $row['gender'];


            if($db_email == $email && $db_password == $password){
                ?>
                <script>
                    alert("Login Successful")
                    window.location.href = "dashboad.php";
                </script>
                <?php
                

            }

            else{
                ?>
                <script>
                    alert("Email And Password are Incorrect")
                    window.location.href = "login.php";
                </script>
                <?php
            }


        }


        
        
       }
 
 ?>





    











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>