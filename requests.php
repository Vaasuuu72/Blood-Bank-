<?php if(!isset($_SESSION)){session_start();}?>
<?php include "db.php"; 
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $bloodGroup = $_POST['bloodgroup'];
    $email = $_POST['email'];
    $requestDate = $_POST['requestDate'];
    $detail = $_POST['detail'];

    $query = "INSERT INTO `requests`(`name`, `mobileNumber`, `age`, `gender`, `bloodGroup`, `email`, `requestDate`, `detail`) VALUES ('$name', '$mobile', '$age', '$gender', '$bloodGroup', '$email', '$requestDate', '$detail')";
    // echo $query;
    $result = mysqli_query($connection,$query) or exit("Error in query");
    echo '<script>alert("Request Sent Successfully")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEND REQUEST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/header.css">
    <style>
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0; 
        }
        body {
            /* background-color:white;   */
            background-image: url(https://bloodbankonline.org/images/Tue2014_BackgroundBokeh_3.jpg);
            opacity: 0.9;
        }

        .requests {
            margin-left: 36%;
            padding-right: 370px;
            margin-top: 5%;
        /*  background-color: #f58e72;*/
            opacity: 0.9;
        }
        .header {
            font-family: arvo;
            margin-left: 59%;
            width: 400%;
            margin-top: 8%;
            color:#333;
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
            /* border: 2px solid #333; */
        }
        .form-control:focus{
            transform: scale(1.1);
        }
        
        form{
            margin-left: 10%;
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
            /* border: 2px solid #333; */
        }
        .gender:focus,.bloodgroup:focus{
            transform: scale(1.1);
        }
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0; 
        }
        .submit{
            margin-left: 110%;
            width: 120%;
            box-shadow: 0 0 1px #ccc;
            transition: all 0.5s ease-in-out;
            
        }
        .submit:hover{
            transform: scale(1.1);
        }
        .in {
            margin-left: 80%;
            width: 180%;
            text-align: center;
            margin-bottom: -5%;
            font-size: 20px;
            font-family: arvo;
        }
    </style>
</head>
<body>
    <nav class="topnav">
        <a href="homeLogout.php">Home</a>
        <a href="camps.php">Camps</a>
        <a href="profile.php">Profile</a>
        <a href="search.php">Search</a>
        <a href="requests.php">Send Requests</a>
        <a href="viewRequests.php">View Requests</a>
        <a class= "login" href="home.php">Logout</a>
    </nav>
    <div class="col-md-4 requests">
        <div class="header"><h2><b>SEND REQUEST</b></h2></div>
        <form action="" method="POST">
            <input type="text" name="name" class="form-control" required placeholder="Name*">
            <input type="number" name="age" class="form-control" id="age" required placeholder="Age*">
            <input type="text" name="mobile" class="form-control" id="mobile" required placeholder="Mobile Number*">
            <select name="gender" class="gender text-center" required>
                <option selected disabled >Choose Gender:</option>
                <option value="Male" name="Male">Male</option>
                <option value="Female" name="Female">Female</option>
            </select><br>
            <select name="bloodgroup" id="" class="bloodgroup text-center"  required>
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
            <label for="requestDate" class="in"><b>Till Date: </b></label>
            <input type="date" name="requestDate" class="form-control" id="" min ="2020-10-20" max="2020-12-31" required>
            <label for="detail" class = "in"><b>Detail: </b></label>
            <textarea name="detail" class="form-control" id="" cols="44" rows="4" required placeholder = "Detail*"></textarea>
            <div class = "form-group">
                <button type="submit" class = "btn btn-info submit" name = "submit">SUBMIT</button>
            </div>
        </form>
    </div>
</body>
</html>