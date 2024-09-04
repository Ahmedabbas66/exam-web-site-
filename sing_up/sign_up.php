<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up page</title>
    <link rel="stylesheet" href="sign_up.css">
    <script>
    function validateForm() {
        var name1 = document.getElementById("name1").value;
        var name2 = document.getElementById("name2").value;
        var id = document.getElementById("id").value;
        var phonenumber = document.getElementById("phonenumber").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var confirmpassword = document.getElementById("confirmpassword").value;
        var gender = document.getElementById("gender").value;
        var type = document.getElementById("type").value;

        // Validation for name1 and name2
        if (!/^[A-Za-z]+$/.test(name1) || !/^[A-Za-z]+$/.test(name2)) {
            alert("Name must contain only alphabets.");
            return false;
        }

        // Validation for id (should be numeric and not exist in database)
        if (!/^\d+$/.test(id)) {
            alert("ID must be a number.");
            return false;
        }

        // Validation for phonenumber (should be numeric and 11 digits)
        if (!/^\d{11}$/.test(phonenumber)) {
            alert("Phone number must be a numeric value of 11 digits.");
            return false;
        }

        // Validation for password and confirm password (should be strings and at least 8 characters long)
        if (password.length < 8 || confirmpassword.length < 8) {
            alert("Password and confirm password must be at least 8 characters long.");
            return false;
        }

        // Check if password matches confirm password
        if (password !== confirmpassword) {
            alert("Password and confirm password do not match.");
            return false;
        }

        // Validation for gender (should be "male" or "female")
        if (gender !== "male" && gender !== "female") {
            alert("Gender must be 'male' or 'female'.");
            return false;
        }

        // Validation for type (should be "student" or "examfounder")
        if (type !== "student" && type !== "examfounder") {
            alert("Type must be 'student' or 'examfounder'.");
            return false;
        }

        return true; // Form will be submitted if all validations pass
    }
</script>

</head>
<body>
    
    <div class="sign">

        <h1>Sign up</h1>

        <form action="sign_up.php" method="post" onsubmit="return validateForm()" target="_self">
            <?php
                if(isset($_POST["name1"])==true)
                {
                    $name1 = $_POST['name1'];
                    $name2 = $_POST['name2'];
                    $id = $_POST['id'];
                    $phonenumber = $_POST['phonenumber'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $confirmpassword = $_POST['confirmpassword'];
                    $gender = $_POST['gender'];
                    $type = $_POST['type'];
                    
                    require_once("connect.php");
                    $r=$conn->query("INSERT INTO signup VALUES ('$id','$name1', '$name2','$email', '$password', '$confirmpassword', '$gender', '$type','$phonenumber') ;");
                    if ($r==true)
                    {
                        header("Location: ../Student/Home/home.html");
                    }

                    }
                    else{
                    echo'
                    <label for="name1">First Name</label>
                    <input autofocus required id="name1" name="name1" type="name">
        
                    <br>
        
                    <label for="name2">Last Name</label>
                    <input required id="name2" name="name2" type="name">
        
                    <br>
        
                    <label for="id">ID</label>
                    <input required id="id" name="id" type="text">
        
                    <br>
        
                    <label for="phonenumber">Phone Number</label>
                    <input required id="phonenumber" name="phonenumber" type="text">
        
                    <br>
        
                    <label for="email">Email</label>
                    <input required id="email" name="email" type="email">
        
                    <br>
        
                    <label for="password">Password</label>
                    <input required id="password" name="password" type="password">
        
                    <br>
        
                    <label for="confirmpassword">Confirm Password</label>
                    <input required id="confirmpassword" name="confirmpassword" type="password">
        
                    <br>
        
                    <div class="lableinput">
                        <label for="type">You are </label>
                        <select required name="type" id="type">
                            <option value="select">-- Select --</option>
                            <option value="examfounder">Exam Founder</option>
                            <option value="student">Student</option>
                        </select>
                    </div>
        
                    <br>
        
                    <div class="lableinput">
                        <label for="gender">Gender</label>
                        <select required name="gender" id="gender">
                            <option value="select">-- Select --</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
        
                    <input required id="submit" type="submit" value="Sign in">
                    
                    ';
                    }
    
            ?>
        </form>

        <div class="register-link">
            <p>have an account? <a href="../login/login.php">login</a></p>
        </div>
        
    </div>
</body>
</html>