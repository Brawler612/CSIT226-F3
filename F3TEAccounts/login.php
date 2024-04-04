<?php include('server.php');

// If the user is already logged in, redirect to about_us.php
if(isset($_SESSION['username'])) {
    header('location: about_us.php');
    exit(); // Ensure that no further code is executed
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Online Classroom - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <h1 class="title">Random Online Classroom</h1>
            <a class="registerText" href="register.php">Register</a>
            <a href="login.php">Login</a>
            <a href="about_us.php">About Us</a>
            <a href="contact_us.php">Contact Us</a>
        </nav>
    </header>

    <div class="container">
        <h2>Login Form</h2>
        <form class="form" method="post" action="login.php">
            <?php include('errors.php'); ?>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" autocomplete="off" required>
            <?php if(isset($field_errors['email'])) echo "<span class='error-message'>".$field_errors['email']."</span>"; ?>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" autocomplete="off" required>
            <?php if(isset($field_errors['username'])) echo "<span class='error-message'>".$field_errors['username']."</span>"; ?>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <?php if(isset($field_errors['password'])) echo "<span class='error-message'>".$field_errors['password']."</span>"; ?>

            <button type="submit" name="login_user">Login</button>
        </form>
    </div>

    <div class="features">
        <h2>Why Choose Random Online Classroom?</h2>
        <div class="feature-item">
            <h3>Flexible Learning</h3>
            <p>Study at your own pace from anywhere in the world.</p>
        </div>
        <div class="feature-item">
            <h3>Interactive Sessions</h3>
            <p>Engage in real-time discussions with instructors and peers.</p>
        </div>
        <div class="feature-item">
            <h3>Wide Range of Courses</h3>
            <p>Explore diverse subjects taught by experienced educators.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Random Online Classroom. All rights reserved.</p>
    </footer>
</body>
</html>



