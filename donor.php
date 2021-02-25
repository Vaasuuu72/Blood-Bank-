<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="css/header.css">
    <style>
        body {
            background-image: url("https://cdn2.vectorstock.com/i/1000x1000/33/11/background-blue-abstract-website-pattern-vector-3523311.jpg");
            background-size: cover;
            height: 100%;
            background-size: 100%;
            background-repeat: space;
            
        }
        .header {
            font-family: "Julius Sans One";
            color:black;
            background-size: cover;
            height: 100%;
            background-size: 100%;
            
        }
        .a {
            margin-bottom: 5%;
            font-size: 65px;
            margin-top: 2%;
            margin-left: 26%;
            
        }
        .afterdonation{
            float: right;
            margin-left: 100px;
            font-family: Verdana, Geneva, Tahoma, sans-serif
        }
        h2{
            font-family: "Arvo";
        }
        .beforedonation{
            float:left;
            margin-left: 100px;
            font-family: Verdana, Geneva, Tahoma, sans-serif
        }
        body{
            background-color: #F2F6EA;
        }
        #instructions1{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin-left: 100px;
            
            font-size: 20px;

        }
    </style>
    <title>Donor</title>
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
  <div class=" header"><h1 class=" a">GENERAL INSTRUCTIONS</h1></div><br>
    <div class="row">
        <div class="beforedonation">
            <h2><b>Before Donation</b></h2>
        <p id="instructions2">
                Donating blood is a simple thing to do, but it can make a big difference <br>
                in the lives of others. The donation process from the time you arrive<br>
                until the time you leave takes about 30 minutes. The donation itself <br>
                is only about 8-10 minutes on average. The steps in the process are: <br>
        </p>
        <h4>Before Donating Blood</h4>
        <p id="instructions2"><ul>
            <li>Eat something substantial before your appointment.</li>
            <li>
                Have plenty of liquid the day before donation, especially in warm <br> 
                weather. In the 3 hours before donating, have at least 3 to 4 good- <br>
                sized glasses of water/juice.
            </li>
        </ul></p>
        <h4>Registraion of Donor</h4>
        <p id="instructions2">
            Our volunteer/staff will ask you to fill a form with brief information on <br> contact details and medical history.
        </p>
        <h4>Physical Health check-up</h4>
        <p id="instruction2">
            You will be examined by a doctor to answer some questions about your <br> health history. Your
            blood pressure and hemoglobin level will be checked.
        </p>
        <h4>Blood Donation</h4>
        <p id="instructions2">
            We will cleanse an area on your arm and insert a brand new sterile needle <br> for the blood 
            draw. This feels like a quick pinch and is over in seconds.
            <ul>
                <li>The actual donation takes about 8-10 minutes, during which you will be <br>
                    seated comfortably.
                </li>
                <li>
                    When a unit of blood (350 – 450 ml) has been collected, the donation is <br>
                    complete.
                </li>
                <li>A staff person will place a bandage on your arm</li>
            </ul>
        </p>
        </div>
        <div class="afterdonation">
            <h2><b>After Donation</b></h2>
            <h4>Relax & Refresh</h4>
            <p id="instructions2">
                You can have something to eat and drink in and relax for about 15-20 <br>
                minutes before departing. Within 24-48 hours your blood volume is <br>
                completely restored. Apart from enjoying our refreshments and souvenir,<br>
                other things to help you recover quickly include: <br>
                <ul>
                    <li>
                        Drink plenty of water, fruit juice etc. and avoid alcohol for 8 hours <br> after
                        you’ve given blood.
                    </li>
                    <li>
                        Avoid any strenuous activity or heavy lifting with the 'donating arm' <br> for 24
                        hours after you’ve given blood.
                    </li>
                    <li>
                        If you become unwell in any way after giving blood, speak to the <br> doctor in-
                        charge straight away.
                    </li>
                </ul>
            </p>
            <h4>Donate Blood Again</h4>
            <p id="instruction2">
                <ul>
                    <li>Whole blood donors can give blood again after 3 months.</li>
                    <li>
                        Apheresis plasma or platelet donors can give blood in around 2-3 <br> weeks
                        time.
                    </li>
                </ul>
            </p>
            <h4>Spread the Word</h4><p id="instruction2">
                Tell your friends, colleagues and family about the wonderful feeling you <br> experience on
                donating blood and saving lives. <br>
                Enjoy the feeling of knowing that you helped save precious lives!
            </p>
        </div>
    </div> 
</body>
</html>