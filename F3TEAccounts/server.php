<?php
session_start();

// initializing variables
$errors = array(); 
$field_errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'F3TEAccounts');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname) || empty($lastname) || empty($gender) || empty($email) || empty($password)) {
      array_push($errors, "All fields are required");
  }

  // first check the database to make sure 
  // a user does not already exist with the same email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    array_push($errors, "email already exists");
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database

    $query = "INSERT INTO users (firstname, lastname, gender, email, password) 
            VALUES('$firstname', '$lastname', '$gender', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now registered";
    header('location: login.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
    array_push($errors, "email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (empty($email)) {
    $field_errors['email'] = "Email is required";
  }
  if (empty($username)) {
      $field_errors['username'] = "Username is required";
  }
  if (empty($password)) {
      $field_errors['password'] = "Password is required";
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    } else {
      array_push($errors, "Wrong email/password combination");
    }
  }
}
?>
