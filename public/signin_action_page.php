<?php

session_start();

$username = trim($_POST['username']);
$password = trim($_POST['password']);

if(!valid_length($username, 1, 50)) 
{
    $errors['username'] = "Username is required. Must be less than 50 characters.";
}

if(!valid_length($password, 10, 128)) 
{
    $errors['password'] = "Password is required. Must be between 10 and 128 characters.";
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
    header('Location: signin.php');
}

?>

<p>Username: <?= htmlspecialchars($username) ?></p>
<!-- <?php if(isset($usernameError)) { ?>
    <span id="usernameError" class="error"><?= $usernameError ?></span>
<?php } ?> -->

<p>Password: <?= htmlspecialchars($password) ?></p>
<!-- <?php if(isset($passwordError)) { ?>
    <span id="passwordError" class="error"><?= $passwordError ?></span>
<?php } ?> -->


