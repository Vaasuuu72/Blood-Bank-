<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/header.css">
    <title>PROFILE</title>
    <style>
        body{
            background: url(pic/pexels-photo-4065890.jpeg);
            /* background:#F2F6EA; */
            =
            overflow:hidden;
        }
        fieldset{
            border: 2px solid #333;
            width: 20%;
            margin-left: 40%;
        }
        form{
            text-align: center;
        }
        .header{
            /* margin-top: 100px; */
            font-size: 100px;
            font-family: Arvo;
            margin-left: 170px;
            color: red;
        }
        .search:focus{
            transform: scale(1.1);
        }
        .nav{
            float: left;
            margin-left: 100px;
        }
        .details{
            float:right;
            margin-left: 100px;
        }
        .nav {
            background-color: #333;
            overflow: hidden;
        }
        .nav a {
            float: left;
            color: white;
            text-align: center;
            padding: 24px 16px;
            text-decoration: none;
            font-size: 30px;
            font-family: "Julius Sans One";
        }
        .nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .nav a.active{
            background-color: #4CAF50;
            color: white;
        }
        .topnav a.logout{
            float: right;
        }
        td{
            padding: 10px;
        }
        .input{
            color: #F95700FF;

        }
        .label{
            color: #4D774E;
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
        
        <a class= "login" href="home.php">Logout</a>
  </nav>
    <?php include "loginServer.php";
    $email = $_SESSION['email'];
    if (!(isset($_SESSION['email']) && $_SESSION['email'] != '')) {
        header ("Location: login.php");
    }
    $q = "SELECT * FROM `donors`,`bloodgroup` WHERE  email = '$email' and donors.bloodId = bloodgroup.bloodId";
    $result = mysqli_query($connection, $q) or exit("Error in query");
    $details = mysqli_fetch_array($result);
    ?>
    <div class="header"><i class="glyphicon glyphicon-user user"></i><p><b>MY ACCOUNT</b></p></div><br>
    <div class = "row">
    <nav class="nav flex-column">
        <a class="nav-link active" href="profile.php">Dashboard</a>
        <a class="nav-link" href="donateBlood.php?email=<?php echo $details['email'];?>">Blood Donated</a>
        <a class="nav-link" href="viewDonations.php?email=<?php echo $details['email'];?>">View Donations</a>
        <a class="nav-link" href="viewRequests.php">View Requests</a>
    </nav>
    <div class="details">
        <table>
            <tr>
                <td><h2 class="label"><b>NAME: </b></h2></td>
                <td><div class="input"><h2><b><?php echo $details['name']; ?></b></h2></div></td>
            </tr>
            <tr>
                <td><h2 class="label"><b>GENDER: </b></h2></td>
                <td><div class="input"><h2><b><?php echo $details['gender']; ?></b></h2></div></td>
            </tr>
            <tr>
                <td><h2 class="label"><b>AGE: </b></h2></td>
                <td><div class="input"><h2><b><?php echo $details['age']; ?></b></h2></div></td>
            </tr>
            <tr>
                <td><h2 class="label"><b>MOBILE NUMBER: </b></h2></td>
                <td><div class="input"><h2><b><?php echo $details['mobileNumber']; ?></b></h2></div></td>
            </tr>
            <tr>
                <td><h2 class="label"><b>BLOOD GROUP: </b></h2></td>
                <td><div class="input"><h2><b>
                    <?php 
                    // $s="select * from donors,bloodgroup where donors.bloodId='". $_REQUEST["bg"]."' and donors.bloodId=bloodgroup.bloodId";
                    echo $details['bloodGroup'];
                    ?>
                </b></h2></div></td>
            </tr>
            <tr>
                <td><h2 class="label"><b>EMAIL: </b></h2></td>
                <td><div class="input"><h2><b><?php echo $details['email']; ?></b></h2></div></td>
            </tr>
        </table>
        
    </div>
    </div>
</body>
</html>