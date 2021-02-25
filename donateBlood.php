<?php if(!isset($_SESSION)){session_start();}?>
<?php include "db.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $camps = $_POST['camps'];
        $date = $_POST['date'];
        $units = $_POST['units'];
        $details = $_POST['details'];
        $query = "INSERT into `donations` (`campsId`,`date`,`units`,`details`,`email`) values('$camps','$date','$units','$details','".$_SESSION['email']."')";
        $result = mysqli_query($connection,$query) or exit('Error in query');
        echo '<script>alert("Saved Successfully")</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" type="text/css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Blood Donated</title>
    <style>
        body{
            background-color: #F2F6EA;
            
        }
        .header{
            /* margin-top: 100px; */
            font-size: 100px;
            font-family: Arvo;
            margin-left: 170px;
            color: red;
        }
        h1{
            font-size: 50px;
            font-family: Arvo;
            /* margin-left: 250px; */
            color: #333;
        }
        .nav{
            float: left;
            margin-left: 100px;
        }
        .donate{
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
        .nav a.active{
            background-color: #4CAF50;
            color: white;
        }
        .nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .topnav a.logout{
            float: right;
        }
        td{
            padding: 10px;
        }
        .input{
            color: red;
        }
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0; 
        }
        .submit{
            margin-left: 40%;
            font-size: 20px;
            box-shadow: 0 0 1px #ccc;
            transition: all 0.5s ease-in-out;
        }
        .submit:hover{
            transform: scale(1.1);
        }
        .form-control, textarea {
            transition: all 0.5s ease-in-out;
            font-family: Arvo;
            opacity: 0.9;
            
        }
        .form-control:focus, textarea:focus{
            transform: scale(1.1);
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
    <div class="header"><i class="glyphicon glyphicon-user user"></i><p><b>MY ACCOUNT</b></p></div><br>
    <div class = "row">
    <nav class="nav flex-column">
        <a class="nav-link" href="profile.php">Dashboard</a>
        <a class="nav-link active" href="donateBlood.php">Blood Donated</a>
        <a class="nav-link" href="viewDonations.php">View Donations</a>
        <a class="nav-link" href="viewRequests.php">View Requests</a>
    </nav>
    <div class="donate">
        <form action="" method="POST">
        <table>
            <thead><h1>BLOOD DONATED</h1></thead>
                <tr>
                    <td><h2><b>CAMPS: </b></h2></td><td><div class="input">
                    <select name="camps" id="" class="form-control" required>
                        <option value="" disabled>Select Camp:</option>
                        <?php
                            $q = "SELECT * from `camps`";
                            $res = mysqli_query($connection,$q);
                            while($camp=mysqli_fetch_array($res)){
                                echo "<option value = $camp[0]>$camp[1]</option>";
                            }
                        ?>
                    </select>
                    </div></td>
                </tr>
                <tr>
                    <td><h2><b>DATE: </b></h2></td>
                    <td><div class="input"><input type="date" class="form-control" name="date" required min ="2020-10-01" max="2020-12-31"></div></td>
                </tr>
                <tr>
                    <td><h2><b>NO. OF UNITS: </b></h2></td>
                    <td><div class="input"><input type="number" name="units" class="form-control" required id=""></div></td>
                </tr>
                <tr>
                    <td><h2><b>OTHER DETAILS: </b></h2></td>
                    <td><div class="input"><textarea name="details" id="" cols="40" rows="4" required></textarea></div></td>
                </tr>
        </table><br>
        <div class = "form-group">
            <button type="submit" class = "btn btn-info submit" name = "submit">SAVE</button>
        </div></form>
    </div>
    </div>
</body>
</html>