<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<header class="HEADER">

    <div class="left-header">

    <!-- <a href="" class="MENU"><img src="" alt="" class="menu-img"></a> -->
    <a href="../../Student/Home/home.html"><input class="home" id="abut us" type="button" value="Home"></a>
    <a href="../../Student/Levels/levels.html"><input class="home" id="abut us" type="button" value="Levels"></a>
    <a href="../../Student/Get in Touch/get_in_touch.html"><input class="WORK" id="work" type="button" value="Get In Touch"></a>

    </div>

    <div class="right-header">
        <a href="../../sing_up/sign_up.php"><input class="signup" id="signup" type="button" value="Sign Up"></a>
        <a href="../../login/login.php"><input class="login" id="login" type="button" value="Login"></a>
        <a href="../../Student/Profile/profile.php"><i class='fas fa-user-circle' style='font-size:48px;color:white;display:inline-block; position: absolute;right: 175px;top: 17px; cursor: pointer;'></i></a>
        <a href="../../login/login.php"><input class="logout" id="logout" type="button" value="Logout"></a>
    </div>

</header>

<body>

    <main>

        <div class="profile">

            <h1>Account Information</h1>

            <div id="photo">
                <img src="4846374.jpg" alt="">
            </div>

            <h3>student</h3>

            <div class="information">

                <form action="profile.php" method="post">
                <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $id = $_POST['id'];
                            require_once("connect.php");

                            // Prepare and bind SQL statement
                            $stmt = $con->prepare("SELECT id, name1, name2, email, password, confirmpassword, gender, type, phonenumber FROM signup WHERE id = ?");
                            $stmt->bind_param("s", $id);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows == 1) {
                                // User with the provided ID exists, fetch profile data
                                $row = $result->fetch_assoc();
                                // Display profile information
                                echo '
                                <div class="lableinput">
                                    <label for="name1">First Name</label>
                                    <input required id="name1" type="text" name="name1" value="' . $row['name1'] . '">
                                </div>

                                <div class="lableinput">
                                    <label for="name2">Last Name</label>
                                    <input required id="name2" type="text" name="name2" value="' . $row['name2'] . '">
                                </div>

                                <div class="lableinput">
                                    <label for="id">ID</label>
                                    <input required id="id" type="text" name="id" value="' . $row['id'] . '">
                                </div>

                                <div class="lableinput">
                                    <label for="phonenumber">Phone Number</label>
                                    <input required id="phonenumber" type="text" name="phonenumber" value="' . $row['phonenumber'] . '">
                                </div>

                                <div class="lableinput">
                                    <label for="email">Email</label>
                                    <input required id="email" type="email" name="email" value="' . $row['email'] . '">
                                </div>
                                
                                <div class="lableinput">
                                    <label for="gender">Gender</label>
                                    <input required id="gender" type="text" name="gender" value="' . $row['gender'] . '">
                                </div>

                                <div class="lableinput">
                                    <label for="type">Type</label>
                                    <input required id="type" type="text" name="type" value="' . $row['type'] . '">
                                </div>

                                ';
                            } else {
                                // User with the provided ID doesn't exist
                                echo "User with this ID doesn't exist.";
                            }

                            // Close statement and connection
                            $stmt->close();
                            $con->close();
                        } else {
                            // Display login form
                            echo '
                            <form action="profile.php" method="post">
                                <div class="lableinput">
                                    <label for="id">ID</label>
                                    <input autofocus required id="id" name="id" type="text">
                                </div>
                                <input required id="submit" type="submit" value="Submit">
                            </form>';
                        }
                    ?>

        

            
                        
                </form>

            </div>
  
        </div>
    </main>

</body>

<footer>
    <div class="footer-container-1">
        <div class="footer-container-1-span-1">
            <!-- <img id="logo-footre" class="logo-footre" src="" alt=""> -->
            <!-- <a href="">Home</a> -->
            <!-- <a href="">Create Exam</a> -->
            <a href="">Get In Touch</a>
            <a href="">About Us</a>
        </div>
        <div class="social-media">
            <ul>
                <li class="list-social-media-linkedin"> <a target="_blank" href="https://www.youtube.com/riotgames"><i class="fab fa-linkedin"></i></a></li>
                <li class="list-social-media-twitter"> <a target="_blank" href="https://twitter.com/riotgames"><i class="fab fa-twitter"></i></a></li>
                <li class="list-social-media-facebook"> <a target="_blank" href="https://www.facebook.com/RiotGames/"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-social-media-instagram"> <a target="_blank" href="https://www.instagram.com/riotgames/"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <hr>
            <div class="footer-container-2">
                    <a href="http://">
                        Cookie Preferences
                    </a>
                    <a href="http://">
                        2024 Exam Website,Inc.All Rights Reserved.
                    </a>
            </div>
</footer>

</html>