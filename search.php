<?php if(!isset($_SESSION)){session_start();}?>
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
    <title>Search Blood</title>
    <style>
        body{
            /* background-color: #F2F6EA; */
            background-image: url(https://wallpaperheart.com/wp-content/uploads/2018/04/website-background-images-for-website-background-images-hd.jpg);
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
            margin-top: 100px;
        }
        .search {
            font-family: arvo;
            font-size: 20px;
            width: 75%;
            transition: all 0.5s ease-in-out;
            opacity: 0.8;
            /* margin-left: 11%; */
            margin-bottom: -10%;
            
        }
        .search:focus{
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
        <a href="viewRequests.php">View Requests</a>
        <a class= "login" href="home.php">Logout</a>
        
  </nav>
    <div class="header text-center" ><h2>SEARCH BLOOD</h2></div><br>
    <fieldset>
    <form action="" method="POST"><br>
            <!-- <label for="search">Search Blood</label> -->
            <select name="bloodId" class="search text-center"  required>
                <option disabled>Select Blood Group:</option>
                <?php 
                    $query = "select * from bloodgroup";
                    $result = mysqli_query($connection, $query);
                    $r = mysqli_num_rows($result);
                    while($blood=mysqli_fetch_array($result)){
                        echo "<option value = $blood[0]>$blood[1]</option>";
                    }
                ?>
            </select><br><br>
            <div class="form-group"><button type="submit" name="submit" class="btn btn-success">Search</button></div>
        </form>
    </fieldset>
    <?php 
        if(isset($_POST['submit'])){
            $bloodGroup = $_POST['bloodId'];
            header ("Location: results.php?bg=".$bloodGroup);
        }
    ?>
</body>
</html>