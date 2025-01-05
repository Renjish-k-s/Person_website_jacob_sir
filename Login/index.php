<?php include '../include/config.php';?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page with Manual CAPTCHA</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        a {
            text-decoration: none;
        }

        .login-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .login-container h2 {
            margin-bottom: 30px;
            font-weight: bold;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="text" name="email" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="text" name="password" placeholder="Enter Password" required>
            </div>

            <!-- Manual CAPTCHA -->
            <div class="form-group" style="text-align: center;">
                <label id="captchaLabel"></label>
                <input type="text" class="form-control" id="captchaInput" placeholder="Enter the result" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block" id="login_button" name="login_admin">Login</button>
           
        </form>
    </div>

    <script>
        // Generate a simple math CAPTCHA
        const generateCaptcha = () => {
            const num1 = Math.floor(Math.random() * 10) + 1; // Random number between 1-10
            const num2 = Math.floor(Math.random() * 10) + 1; // Random number between 1-10
            const captchaResult = num1 + num2;

            document.getElementById('captchaLabel').innerText = `What is ${num1} + ${num2}?`;
            return captchaResult;
        };

        // Initialize CAPTCHA
        let correctCaptcha = generateCaptcha();

        // Validate CAPTCHA on form submission
        document.getElementById("loginForm").addEventListener("submit", function (e) {
            const userCaptcha = document.getElementById("captchaInput").value;

            if (parseInt(userCaptcha) !== correctCaptcha) {
                e.preventDefault();
                alert("Incorrect CAPTCHA. Please try again.");
                correctCaptcha = generateCaptcha(); // Regenerate CAPTCHA on failure
            }
        });
    </script>

<?php
///////////////////////////////////////////////login part//////////////////////////////////////////////////////////


if(isset($_POST['login_admin']))
{

    $email = strip_tags(trim($_POST['email']));
    $password = strip_tags(trim($_POST['password']));
    $email = mysqli_real_escape_string($con, $email);
    
    $sql = "SELECT * FROM usertable WHERE username = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify the password with the hashed password in the database
        if (password_verify($password, $user['password'])) 
        {

            header("Location: ../Admin/");
            exit();  // Exit after redirecting
            //echo '<script>alert("sucess");</script>';
        } 
        else 
            {
           echo '<script>alert("Invalid username or password!");</script>';
           
            } 
        }
    else 
        {
        echo '<script>alert("Invalid username or password!");</script>';
        }


  // echo '<script>alert("Incorrect");</script>';

}
?>
</body>

</html>
 