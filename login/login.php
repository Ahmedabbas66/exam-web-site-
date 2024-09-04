<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login">

        <h1>Login</h1>

        <form action="login.php" method="post" target="_self">
        <?php
                if(isset($_POST["id"])==true)
                {
                    $id = $_POST['id'];
                    $password = $_POST['password'];
                    require_once("connect.php");
                       // Prepare and bind SQL statement
                    $stmt = $con->prepare("SELECT * FROM signup WHERE id = ?");
                    $stmt->bind_param("s", $id);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows == 1) {
                        // User with the provided ID exists, now check password
                        $row = $result->fetch_assoc();
                        header("Location: ../Student/Home/home.html");
                    } else {
                        // User with the provided ID doesn't exist
                        echo "User with this ID doesn't exist.";
                    }
                    }
                    else{
                    echo'
                    <label for="id">ID</label>
                    <input autofocus required id="id" name="id" type="text">

                    <br>

                    <div class="pass">
                        <label for="password">Password</label>
                    </div>
                    <input required id="password" type="password"  name="password" >
                    <br>
                    <input required id="submit" type="submit" value="Login">
                    ';
                    }
    
            ?>
            
        </form>

        <div class="register-link">
            <p>Don't have an account? <a href="../sing_up/sign_up.php">Sign up</a></p>
        </div>
        
    </div>
</body>
</html>