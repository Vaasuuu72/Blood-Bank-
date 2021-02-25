<?php if(!isset($_SESSION)){session_start();}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMPS</title>
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
            background-color: #F2F6EA;  
            /* background-image: url(https://bloodbankonline.org/images/Tue2014_BackgroundBokeh_3.jpg); */
            opacity: 0.9;
        }

        .header {
            font-family: arvo;
            margin-left: 45%;
            color:#333;
            margin-top: 20px;
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
        table{
            margin-left:100px;
            padding: 10px;
            border: 1px solid;
            box-shadow: 5px 10px #925959;
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
        <div class="header"><h2><b>CAMPS</b></h2></div>
        <table cellpadding="0" cellspacing="0" width="1100px">
            
            <?php
            include "db.php";
$s="SELECT * from camps,state,city where camps.state=state.state_id and camps.city=city.city_id";
	$result=mysqli_query($connection,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result)){
		if($n%2==0){ ?><tr><?php  } ?><td>
    <table cellpadding="0" cellspacing="0" class="tableborder" width="500" style="border:none">
    <tr><td style="font-size:24px; font-weight:bold; text-shadow:1px 1px 6px browm; padding-left:50px; padding-top:10px; padding-bottom:10px; color:#925959">
    <?php echo $data[1]; ?></td></tr>
      <tr><td align="center"> 
   <a href="pic/<?php echo $data['pic'] ?>"data-lightbox="image-1">
    <img src="pic/<?php echo $data['pic'] ?>" height="250px" width="460px" style="margin:auto; padding-left:20px" /></a></td></tr>
<tr><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td></tr>  
          <tr><td class="title"  style="vertical-align:middle"><b>Organised By:  </b><?php echo $data[2]; ?></td><td align="left" width="50%"></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="title" style="vertical-align:middle"><b>State:  </b><?php echo $data['state_name']; ?></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="title" style="vertical-align:middle"><b>City:  </b><?php echo $data['city_name']; ?></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="title" style="vertical-align:middle"><b>Blood Donations:  </b>150</td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		</table>
        </td>
        <?php
        if($n%2==1){ ?>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>
         <tr><td colspan="2">&nbsp;</td></tr>
          <tr><td colspan="2">&nbsp;</td></tr>
        <?php
	}
	$n=$n+1;	
	}?>
    </table>
    </div>
</body>
</html>
        