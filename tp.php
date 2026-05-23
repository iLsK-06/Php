<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Result</title>
</head>
<body>

<?php

$civilite          = $_POST['civilite'] ?? '';
$lastName          = $_POST['userLastName'] ?? '';
$firstName         = $_POST['userFirstName'] ?? '';
$email             = $_POST['userEmail'] ?? '';
$password          = $_POST['password'] ?? '';
$confirmedPassword = $_POST['confirmedPassword'] ?? '';
$langages          = $_POST['langages'] ?? [];

$errors = [];

if (empty($civilite)) {
    $errors[] = "Please pick a title (Mr, Mrs, or Ms).";
}

if (empty($lastName)) {
    $errors[] = "The last name field is empty.";
} elseif (!preg_match('/^[A-Za-z]+$/', $lastName)) {
    $errors[] = "The last name should only contain letters.";
}

if (empty($firstName)) {
    $errors[] = "The first name field is empty.";
} elseif (!preg_match('/^[A-Za-z]+$/', $firstName)) {
    $errors[] = "The first name should only contain letters.";
}

if (empty($email)) {
    $errors[] = "The email field is empty.";
} elseif (!preg_match('/^[A-Za-z0-9_-]+@[A-Za-z0-9_-]+\.[A-Za-z]{2,}$/', $email)) {
    $errors[] = "The email address is not valid.";
}

if (empty($password)) {
    $errors[] = "The password field is empty.";
} elseif (!preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[@%$_-])[A-Za-z0-9@%$_-]{8,}$/', $password)) {
    $errors[] = "The password must be at least 8 characters and include one uppercase letter, one number, and one special character (@, %, $, _, -).";
}

if (empty($confirmedPassword)) {
    $errors[] = "The confirm password field is empty.";
} elseif ($password !== $confirmedPassword) {
    $errors[] = "The passwords do not match.";
}

if (empty($langages)) {
    $errors[] = "Please select at least one language.";
}

?>

<?php if (empty($errors)) { ?>

    <h2>Registration Successful!</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Email</th>
                <th>Languages</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $civilite; ?></td>
                <td><?php echo $lastName; ?></td>
                <td><?php echo $firstName; ?></td>
                <td><?php echo $email; ?></td>
                <td>
                    <?php foreach ($langages as $langage) {
                        echo $langage . "<br>";
                    } ?>
                </td>
            </tr>
        </tbody>
    </table>

<?php } else { ?>

    <h2>Please fix the following errors:</h2>

    <?php foreach ($errors as $error) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>

<?php } ?>

    <br>
    <a href="index.php">Go back to the form</a>

</body>
</html>