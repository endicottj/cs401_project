<?php

session_start();

$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$password_match = trim($_POST['password_match']);
$errors = array();

if(!valid_length($username, 1, 50))
{
    $errors['username'] = "Username is required. Must be less than 50 characters.";
} 

if(!valid_length($email, 1, 50))
{
    $errors['email'] = "Email is required. Must be less than 50 characters.";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Must be a valid email address.";
}

if(!valid_length($password, 10, 128)) 
{
    $errors['password'] = "Password is required. Must be between 10 and 128 characters.";
} else if($password != $password_match) {
    $errors['password_match'] = "Passwords do not match.";
}

function valid_length($field, $min, $max) {
    $trimmed = trim($field);
    return (strlen($trimmed) >= $min && strlen($trimmed) <= $max);
}

// if valid, then redirect user to welcome page, 
// else, redirect them back to the form
if(empty($errors))
{
    header('Location: quotes.php');
} else {
    $_SESSION['errors'] = $errors;
    $_SESSION['presets'] = array('username' => htmlspecialchars($username),
                                'email' => htmlspecialchars($email));
    header('Location: registration.php');
}

?>

<p>Username: <?= htmlspecialchars($username) ?></p>
<p>Email: <?= htmlspecialchars($email) ?></p>
<p>Password: <?= htmlspecialchars($password) ?></p>
<p>Retype Password: <?= htmlspecialchars($password_match) ?></p>



