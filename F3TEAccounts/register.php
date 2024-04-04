<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Online Classroom - Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <h1 class="title">Random Online Classroom</h1>
            <a href="login.php">Login</a>
            <a class="registerText" href="register.php">Register</a>
            <a href="about_us.php">About Us</a>
            <a href="contact_us.php">Contact Us</a>
        </nav>
    </header>

    <div class="container">
        <h2>Register Form</h2>
        <form class="form" method="post" action="register.php">
            <?php include('errors.php'); ?>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" autocomplete="off" required>

            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" autocomplete="off" required>

            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" autocomplete="off" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select> 

            <label class="email" for="email">Email:</label>
            <input type="email" id="email" name="email" autocomplete="off" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="reg_user">Register</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Random Online Classroom. All rights reserved.</p>
    </footer>
</body>
</html>
