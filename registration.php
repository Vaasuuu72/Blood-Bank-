<?php include "db.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $mobileNumber = $_POST['mobile'];
    $bloodId = $_POST['bloodId'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // // Check if image file is a actual image or fake image

    // $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
    // if($check !== false) {
    //   //  echo "File is an image - " . $check["mime"] . ".";
    //     $uploadOk = 1;
    // } else {
    //     echo "File is not an image.";
    //     $uploadOk = 0;
    // }
    // // Check if file already exists
    // if (file_exists($target_file)) {
    //     echo "Sorry, file already exists.";
    //     $uploadOk = 0;
    // }
    // //allow certain file formats
	// if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
	// 	echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
	// 	$uploadok=0;
	// }else{
	// 	if(move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)){
    //         if ($password != $confirmPpassword) {
    //             echo '<script>alert("The two passwords do not match")</script>';
    //             header('location:signup.php');
    //         }
    //         if(count($mobileNumber)!=10){
    //           echo '<script>alert("Mobile Number is invalid")</script>';
    //           echo count($mobileNumber);
    //           header('location:signup.php');
    //         }
    //         $imageUpload = basename($_FILES["imageUpload"]["name"]);
            $query="select * from donors where email='$email' OR mobileNumber='$mobileNumber'";
            $result=mysqli_query($connection,$query) or exit('Error in query');
            $c=mysqli_num_rows($result);
            if($c==0){	
                //$hash = "$2y$10$";
                //$salt = "iusesomecrazystrings22";
                //$hashSalt = $hash.$salt;
                //$password=crypt($password_1,$hashSalt);
                $query = "INSERT INTO donors (name,gender,age,mobileNumber,bloodId,email,password) VALUES('$name','$gender','$age','$mobileNumber','$bloodId','$email','$password')";
                $res = mysqli_query($connection, $query) or exit('Error in Query');
                echo '<script>alert("You have registered successully")</script>';
                header('location: regsucc.php');
            }
            else{
                echo '<script>alert("Phone Number or Email already exists!! SignUp Failed!!")</script>';
            }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link rel="stylesheet" href="css/registration.css">
    <style>
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0; 
        }
        body {
            background-image: url("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/df3a8ac6-d4e1-4b6a-be26-6df662b8ac61/d5swxli-5d97fde8-4464-4a81-b582-c6c0b27be5ea.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2RmM2E4YWM2LWQ0ZTEtNGI2YS1iZTI2LTZkZjY2MmI4YWM2MVwvZDVzd3hsaS01ZDk3ZmRlOC00NDY0LTRhODEtYjU4Mi1jNmMwYjI3YmU1ZWEuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.eWLJFTF3DWiSpaXHKfY1XqUBFAzAxwxupu9pgOnoLfo");
            height: 865px;
            opacity: 0.9;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;    
        }

        .registration {
            margin-left: 37%;
            padding-right: 370px;
            margin-top: 5%;
        /*  background-color: #f58e72;*/
            opacity: 0.9;
        }
        .header {
            font-family: arvo;
            margin-left: 59%;
            margin-top: 8%;
            color:white;
            padding-bottom: 10px;
        }
        label{
            color: white;
        }

        .form-control {
            width:290%;
            margin-left: 25%;
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
        .file{
            margin-left: 37%;
            color: white;
            margin-bottom: 10px;
        }
        form{
            margin-left: 10%;
        }
        label{
            font-size: 22px;
            font-family: arvo;
        }
        .gender,.bloodgroup {
            font-family: arvo;
            font-size: 20px;
            width: 270%;
            margin-top: 10%;
            transition: all 0.5s ease-in-out;
            opacity: 0.8;
            margin-left: 35%;
            /* margin-bottom: -10%; */
            align-items: center;
        }
        .gender:focus,.bloodgroup:focus{
            transform: scale(1.1);
        }
        .acc{
            margin-left: 155%;
            margin-top: 5px;
            color: #495057;
            font-family: arvo;
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
            width: 180%;
            margin-left: 76%;
            margin-top: 10px;
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
    <div class="col-md-4 registration">
        <div class="header"><h2>REGISTRATION</h2></div>
        <form action="" method="POST">
            <input type="text" name="name" class="form-control" required placeholder="Name*">
            <input type="number" name="age" class="form-control" id="age" required placeholder="Age*">
            <input type="text" name="mobile" class="form-control" id="mobile" required placeholder="Mobile Number*">
            <select name="gender" class="gender text-center" required>
                <option selected disabled >Choose Gender:</option>
                <option value="Male" name="Male">Male</option>
                <option value="Female" name="Female">Female</option>
            </select>
            <select name="bloodId" id="" class="bloodgroup text-center"  required>
                <option  selected disabled>Select Blood Group:</option>
                <?php 
                    $query = "select * from bloodgroup";
                    $result = mysqli_query($connection, $query);
                    $r = mysqli_num_rows($result);
                    while($blood=mysqli_fetch_array($result)){
                        echo "<option value = $blood[0]>$blood[1]</option>";
                    }
                ?>
            </select>
            <input type="email" name="email" class="form-control" id="" placeholder="Email*" required>
            <input type="password" class="form-control" name="password" id="" placeholder="Password*" required>
            <input type="password" class="form-control" name="confirmPassword" id="" placeholder="Confirm Password*" required>
            <!-- <label for="">Profile Photo: </label>
            <input type="file" name="imageUpload" id="imageUpload" class="file" ><br> --><br>
            <div class = "form-group">
                <button type="submit" class = "btn btn-sm animated-button conS" style="background-color:transparent" name = "submit">REGISTER</button>
                <h3 class="acc"><b>Or</b></h3>    
                 <a href="login.php" class="btn btn-sm animated-button conL" type="button" name="login">LOGIN</a>
            </div>
        </form>
    </div>
</body>
</html>
