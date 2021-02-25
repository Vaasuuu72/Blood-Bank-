<?php include "db.php";
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
		$email=$_POST['email'];
		$password=$_POST['password'];
        $query = "SELECT * FROM donors WHERE email='$email' AND password='$password'";
        $results = mysqli_query($connection, $query);
        if (mysqli_num_rows($results) == 1) {
            echo '<script>alert("Login successful")</script>';
            $_SESSION['email']=$email;
            $_SESSION['success']='You have signed in successfully';
            header('location: homeLogout.php');
        }else{
              echo '<script>alert("Login failed")</script>';
        }
}

?>