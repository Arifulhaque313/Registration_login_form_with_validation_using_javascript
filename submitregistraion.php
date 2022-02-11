
<?php

        include 'includes/db.php';
    
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $mobile= $_POST['mobile'];
        $gender= $_POST['gender'];

        $query = "insert into users(name,email,password,mobile,gender) values('$name','$email','$password','$mobile','$gender')";
        mysqli_query($link,$query);
?>

<script>
        alert("Registration Submitted")
        window.location.href = "login.php";
</script>

