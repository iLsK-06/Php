<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>

    <h2>Registration Form</h2>

    <form action="tp.php" method="POST">

        <label>Title:</label><br>
        <input type="radio" name="civilite" value="Mr"> Mr
        <input type="radio" name="civilite" value="Mrs"> Mrs
        <input type="radio" name="civilite" value="Ms"> Ms
        <br><br>

        <label>Last Name:</label><br>
        <input type="text" name="userLastName"><br><br>

        <label>First Name:</label><br>
        <input type="text" name="userFirstName"><br><br>

        <label>Email:</label><br>
        <input type="text" name="userEmail"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <label>Confirm Password:</label><br>
        <input type="password" name="confirmedPassword"><br><br>

        <label>Languages:</label><br>
        <input type="checkbox" name="langages[]" value="PHP"> PHP<br>
        <input type="checkbox" name="langages[]" value="JavaScript"> JavaScript<br>
        <input type="checkbox" name="langages[]" value="Python"> Python<br>
        <input type="checkbox" name="langages[]" value="Java"> Java<br>
        <br>

        <button type="submit">Submit</button>

    </form>

</body>
</html>