<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // You can add your email handling logic here, such as sending an email to your inbox

    // For demonstration purposes, let's just print the submitted data
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>Your message has been received:</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";
    exit(); // Stop further execution after form submission
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Online Classroom - Contact Us</title>
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

    <div class="contact-container">
        <h2>Contact Us</h2>
        <form class="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" autocomplete="off" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" autocomplete="off" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Send Message</button>
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
