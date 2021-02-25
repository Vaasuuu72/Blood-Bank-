<?php include "loginServer.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <script src="https://www.google.com/reCAPTCHA/api.js" async defer></script>    
    <link rel="stylesheet" href="css/login.css">
    <style>
        body {
            background-image: url("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/df3a8ac6-d4e1-4b6a-be26-6df662b8ac61/d5swxli-5d97fde8-4464-4a81-b582-c6c0b27be5ea.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2RmM2E4YWM2LWQ0ZTEtNGI2YS1iZTI2LTZkZjY2MmI4YWM2MVwvZDVzd3hsaS01ZDk3ZmRlOC00NDY0LTRhODEtYjU4Mi1jNmMwYjI3YmU1ZWEuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.eWLJFTF3DWiSpaXHKfY1XqUBFAzAxwxupu9pgOnoLfo");
        /*            background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);*/
            height: 753px;
            opacity: 0.9;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;    
        }
        .login {
            margin-left: 36.6%;
            padding-right: 370px;
            margin-top: 5%;
        /*            background-color: #f58e72;*/
            opacity: 0.9;
        }
        .header {
            font-family: arvo;
            margin-left: 108%;
            margin-top: 50%;
            color:white;
            padding-bottom: 30px;
        }
        .form-control {
            width: 270%;
            margin-left: 10%;
            margin-bottom: 10px;
            box-shadow: 0 0 1px #ccc;
            transition: all 0.5s ease-in-out;
            margin-top: 20px;
            height: 40px;
            font-family: arvo;
            opacity: 0.8;
        }
        .form-control:focus{
            transform: scale(1.1);
        }
        .acc{
            margin-left: 136%;
            color: #495057;
            font-family: arvo;
            margin-bottom: 15px;
        }
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0; 
        }
        .animated-button.conS, .animated-button.conL {
            color: white;
            cursor: pointer;
            display: block;
            position: relative;
            border: 2px solid #305162;
            transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
            width: 135%;
            margin-left: 75%;
            font-size: 20px;
            -webkit-transition: all 0.5s ease-in-out;
            font-family: arvo;
            color: white;
        }
        .animated-button.conS:hover {
            color: white !important;
            background-color: transparent;
            text-shadow: none;
            transform: scale(1.1);
        }
        .animated-button.conS:hover:before {
            bottom: 0%;
            top: auto;
            height: 100%;
        }
        .animated-button.conS:before {
            display: block;
            position: absolute;
            left: 0px;
            top: 0px;
            height: 0px;
            width: 100%;
            z-index: -1;
            content: '';
            color: #000 !important;
            background: #305162;
            transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
        }
        .animated-button.conL:hover {
            color: white !important;
            background-color: transparent;
            text-shadow: ntwo;
            transform: scale(1.1);
        }
        .animated-button.conL:hover:before {
            top: 0%;
            bottom: auto;
            height: 100%;
        }
        .animated-button.conL:before {
            display: block;
            position: absolute;
            left: 0px;
            bottom: 0px;
            height: 0px;
            width: 100%;
            z-index: -1;
            content: '';
            color: #000 !important;
            background: #305162;
            transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
        }
    </style>
</head>
<body>
   <div class="col-md-4 login">
      <div class = "header"><h2><b>Login</b></h2></div>
       <form action="" method = "POST">
            <input type="email" name = "email"  class="form-control" placeholder="Email*" required>
            <input type="password" name = "password" class="form-control" placeholder="Password*" required><br>       
            <div class="g-reCAPTCHA" data-sitekey="your_site_key"></div>
            <div class = "form-group">
                <button class="btn btn-sm animated-button conL" style="background-color:transparent" type="submit" name="submit">LOGIN</button>
                <h3 class="acc"><b>Or</b></h3>
                <a href="registration.php" type="button" class = "btn btn-sm animated-button conS" name = "register">REGISTER</a>
            </div>
   </form>
   </div>
   <?php include "db.php";
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
</body>
</html>
