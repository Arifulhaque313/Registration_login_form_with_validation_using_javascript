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
         <h2>Sign Up</h2>
     </center>

     <form action="submitregistraion.php" method="post" id="form" class="form">
         <div class="form-contro">
             <label for="name">Name:</label>
             <input type="text" name="name" placeholder="Enter you name " id="username">
             <small>Error message</small>
         </div>
         <div class="form-contro">
             <label for="username">Email:</label>
             <input type="email" name="email" placeholder="a@florin-pop.com" id="email">

             <small>Error message</small>
         </div>
         <div class="form-contro">
             <label for="username">Password:</label>
             <input type="password" name="password" placeholder="Password" id="password">

             <small>Error message</small>
         </div>


         <div class="row">
             <div class="col-6">

             
         <div class="form-contro">
             <label for="Mobile">Mobile:</label>
             <input type="text" name="mobile" placeholder="Enter mobile no" id="mobile">

             <small>Error message</small>
         </div>


             </div>
             <div class="col-6">

             <div class="form-contro">
             <label for="Address">Address:</label>
             <select name="gender" id="select">
                 <option value="">select</option>
                 <option value="male">Male</option>
                 <option value="female">Female</option>
             </select>
             <small>Error message</small>

         </div>

             </div>
         </div>



         
         <button type="submit">Signup</button>
     </form>
  <center>   <a href="login.php">already register</a></center>
 </div>


 </div>





    <script src="js/main.js"></script>





    











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