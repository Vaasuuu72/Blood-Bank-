<?php 
  if (!(isset($_SESSION['email']) && $_SESSION['email'] != '')) {
    header ("Location: login.php");
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Copse&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapiscom/css?family=Poppins:300,400,500,600,700,800,900&display=swap">
    <style>
        {
          margin:0;
          padding:0;
          background-color:#F2F6EA;
        }
        .header {
            font-family: "Julius Sans One";
            color:black;            
        }
        .a {
            font-size: 90px;
            margin-left: 13%;
            color: ;white
        }
        .left{
            float:left;
        }
        .right{
            float:right;
            margin-left: 20px;
        }
        .container{
          position: relative;
          width: 100%;
          height: 100vh;
          overflow:auto;
          scroll-snap-type: y mandatory;
        }
        .container .section{
          position: relative;
          width:100%;
          height:100%;
          scroll-snap-align:start;
          background-blend-mode:multiply;
        }
        .container .section .content{
          position:absolute;
          bottom:100px;
          left:50px;
        }
        .container .b .content{
          position:absolute;
          top:100px;
          left:50px;
        }
        .container .c .content{
          position:absolute;
          bottom:100px;
          left:50px;
        }
        .container .section:nth-child(1){
          background: url(pic/pexels-photo-4226924.jpeg);
          background-size:cover;
          background-attachment: fixed;
        }
        .container .section:nth-child(2){
          background: url(pic/pexels-photo-4149034.jpeg);
          background-size:cover;
          background-attachment: fixed;
        }
        .container .section:nth-child(3){
          background: #F2F6EA;
          background-size:cover;
          background-attachment: fixed;
        }
        .container .section:nth-child(4){
          background: url(pic/pexels-photo-4047146.jpeg);
          background-size:cover;
          background-attachment: fixed;
        }
    </style>
</head>
<body>
    <nav class="topnav">
        <a class="active" href="home.php">Home</a>
        <a href="camps.php">Camps</a>
        <a href="profile.php">Profile</a>
        <a href="search.php">Search</a>
        <a href="requests.php">Send Requests</a>
        <a href="viewRequests.php">View Requests</a>
        <a class= "login" href="login.php">Login</a>
        <a class= "signup" href="registration.php">Register</a>
  </nav>
  
  <div class="container">
  <div class="section b">
      <div class="content">
        <div class="header"><h1 class="a"><b>LifeQuest</b></h1></div>
      </div>
    </div>
    <div class="section">
      <div class="content">
        <h1 class="display-4 color-white  wd-max px-2 mb-1">Donate Blood</h1>
        <h1 class="f-40 color-white  wd-max px-2 ">Save Lives</h1>
        <p class="color-white w-50-lg px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi placeat accusantium officia ipsa <br>
        quibusdam quis voluptates, illo quae rem, magnam provident, incidunt tempora alias nemo modi rerum! <br>
        Sint, consequatur minima?</p>
      </div>
    </div>
    <div class="section c">
      <div class="content">
        <h2 align=center style="color:#EA2f2c">LEARN ABOUT DONATION</h2><br><br>
        <div class="left">
          <img src="https://www.eraktkosh.in/BLDAHIMS/bloodbank/transactions/assets/webp/donationFact.webp" 
          style="width:550px; height:300px;" alt="">
          <blockquote><br>
 		      <p style='font-family:oswald; font-size:20px;'>After donating blood, the body works to replenish the blood loss. <br>
          This stimulates the production of new blood cells and <br> in turn, helps in maintaining good health.<p>
		      </blockquote><br>
      	  <button onclick="window.location.href='donor.php'" class='btn btn-danger svcNearBy hvr-sweep-to-right '>Learn More</button> 
        </div>
        <div class="right">
		        <table class="table table-responsive table-bordered ">
            <tbody>
            <tr>
            <th colspan="3" style='color:white;background-color:red;'>Compatible Blood Type Donors</th>
            </tr>
            <tr>
            <td><b>Blood Type</b></td>
            <td><b>Donate Blood To</b></td>
            <td><b>Receive Blood From</b></td>
            </tr>
            <tr>
            <td><span style="color: #961e1b;"><b>A+</b></span></td>
            <td>A+ AB+</td>
            <td>A+ A- O+ O-</td>
            </tr>
            <tr>
            <td><span style="color: #961e1b;"><b>O+</b></span></td>
            <td>O+ A+ B+ AB+</td>
            <td>O+ O-</td>
            </tr>
            <tr>
            <td><span style="color: #961e1b;"><b>B+</b></span></td>
            <td>B+ AB+</td>
            <td>B+ B- O+ O-</td>
            </tr>
            <tr>
            <td><span style="color: #961e1b;"><b>AB+</b></span></td>
            <td>AB+</td>
            <td>Everyone</td>
            </tr>
            <tr>
            <td><span style="color: #961e1b;"><b>A-</b></span></td>
            <td>A+ A- AB+ AB-</td>
            <td>A- O-</td>
            </tr>
            <tr>
            <td><span style="color: #961e1b;"><b>O-</b></span></td>
            <td>Everyone</td>
            <td>O-</td>
            </tr>
            <tr>
            <td><span style="color: #961e1b;"><b>B-</b></span></td>
            <td>B+ B- AB+ AB-</td>
            <td>B- O-</td>
            </tr>
            <tr>
            <td><span style="color: #961e1b;"><b>AB-</b></span></td>
            <td>AB+ AB-</td>
            <td>AB- A- B- O-</td>
            </tr>
            </tbody>
          </table>
	      </div>
      </div>
    </div>
    <div class="section">
      <div class="content">
        <h1 class="f-40 color-white  wd-max px-2 ">Ensuring Access to Safe Blood</h1>
        <p class="color-white w-50-lg px-2">
        A well organised Blood Transfusion Service (BTS) is a vital component of any health care delivery system. An integrated strategy for <br>
        Blood Safety is required for elimination of transfusion transmitted infections and for provision of safe and adequate blood transfusion <br>
        services to the people.The main component of an integrated strategy include collection of blood only from voluntary, non- <br>
        remunerated blood donors, screening for all transfusion transmitted infections and reduction of unnecessary transfusion. <br><br>
        
        The Blood Transfusion Service in the country is highly decentralised and lacks many vital resources like manpower, adequate  <br>
        infrastructure and financial base. The main issue, which plagues blood banking system in the country, is fragmented management.  <br>
        The standards vary from state to state, cities to cities and centre to centre in the same city. In spite of hospital based system, many  <br>
        large hospitals and nursing homes do not have their own blood banks and this has led to proliferation of stand-alone private blood banks. <br><br>

        The blood component production/availability and utilisation is extremely limited. There is shortage of trained health-care <br>
        professionals in the field of transfusion medicine. <br><br>

        For quality, safety and efficacy of blood and blood products, well-equipped blood centres with adequate infrastructure and trained  <br>
        manpower is an essential requirement. For effective clinical use of blood, it is necessary to train clinical staff. To attain maximum  <br>
        safety the requirements of good manufacturing practices and implementation of quality system moving towards total quality  <br>
        management, have posed a challenge to the organisation and management of blood transfusion service. <br><br>

        Thus, a need for modification and change in the blood transfusion service has necessitated formulation of a National Blood Policy <br>
        and development of a National Blood Programme which will also ensure implementation of the directives of Supreme Court of India <br>
        -1996. <br>

        </p>
      </div>
    </div>
  </div>
</body>
</html>