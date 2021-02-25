<?php if(!isset($_SESSION)){session_start();}?>
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
    <title>Blood Donations</title>
    <style>
        body{
            background-color: #F2F6EA;
            
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
        tr,td{
            text-align:center;
        }
        table {
            padding: 10px;
            border: 1px solid;
            box-shadow: 5px 10px #925959;
        
        }
        th{
            padding:10px;
        }
        td,th {
            border: 1px solid black;
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
        <a class="nav-link " href="donateBlood.php">Blood Donated</a>
        <a class="nav-link active" href="viewDonations.php">View Donations</a>
        <a class="nav-link" href="viewRequests.php">View Requests</a>
    </nav>
    
    <div class="donate">
        <h1>BLOOD DONATIONS</h1><br>
    <?php if(!isset($_SESSION)){session_start();}?>
    <?php include "db.php";
    $query = "SELECT * from `donations`,`camps` where donations.campsId = camps.campId and donations.email = '".$_SESSION['email']."'";
    $result = mysqli_query($connection,$query) or exit("Error in query");
    
    ?>
        <table>
            <th style="color:red;"><h2>CAMPS</h2></th>
            <th style="color:red;"><h2>DATE</h2></th>
            <th style="color:red;"><h2>NO. OF UNITS</h2></th>
            <?php while($donations = mysqli_fetch_assoc($result)){?>
            <tr><td><div class="details"><h4><b><?php echo $donations['campTitle']; ?></b></h4></div></td>
            <td><div class="details"><h4><b><?php echo $donations['date']; ?></b></h4></div></td>
            <td><div class="details"><h4><b><?php echo $donations['units']; ?></b></h4></div></td></tr><?php }?>
        </table><br>
    </div>
    
</body>
</html>