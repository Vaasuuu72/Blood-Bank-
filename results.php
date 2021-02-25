<?php if(!isset($_SESSION)){session_start();}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCH RESULTS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/header.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Copse&display=swap" rel="stylesheet">
    <style>
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0; 
        }
        body {
            background: url("https://lh3.googleusercontent.com/proxy/92_BMvL5q9snyoDEhYMYi5jMuBtu0dirX6n5BuGyW5RQ_Zydv3kP6iCdcoeRpCPmaJtMehxPiYJK7jxNGtgnmn2HiCC5gM3nHHgSahjRqHsiLN6wYDHqY0M0w5zGn-ZzRw_pvARX5QT_abpN6nbwOK1gq-nhYGzxJvX19oE");  
            /* background-image: url(https://bloodbankonline.org/images/Tue2014_BackgroundBokeh_3.jpg); */
            opacity: 0.9;
            background-size:cover;
        }

        .requests {
            padding-right:20px;
            margin-top: 2%;
        /*  background-color: #f58e72;*/
            opacity: 0.9;
        }
        .header {
            font-family: arvo;
            margin-left: 42%;
            color:black;
            
        }
        .card-text {
            color: #333;    
        }
        .deck {
            margin-left: 7%;
            margin-top: 5%;
            width: 80%;
        }
        label{
            color: red;
            font-family: 'Copse', serif;
        }
        .card{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            background-color: #f1f1f1;
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
    <div class=" requests">
        <div class="header"><h2><b>SEARCH RESULTS</b></h2></div>
        <?php include "db.php";
        $query = "SELECT * from donors,bloodgroup where donors.bloodId='".$_REQUEST["bg"]."' and donors.bloodId = bloodgroup.bloodId";
        $result = mysqli_query($connection,$query) or exit("Error in query");
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="row row-cols-1 row-cols-md-2 deck">
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-body">
                      <p class="card-text"><h4><b><label for="">Name:</label> <?php echo " ".$row['name']; ?></b></h4></p>
                      <p class="card-text"><h4><b><label for="">Gender:</label> <?php echo " ".$row['gender']; ?></b></h4></p>
                      <p class="card-text"><h4><b><label for="">Blood Group:</label> <?php echo $row['bloodGroup']; ?></b></h4></p>
                      <p class="card-text"><h4><b><label for="">Mobile Number:</label> <?php echo " ".$row['mobileNumber'];?></b></h4></p>
                      <p class="card-text"><h4><b><label for="">Email:</label> <?php echo " ".$row['email']; ?></b></h4></p>
                       </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>
        