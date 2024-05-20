<?php
    $error = '';
    if (isset($_POST["cancel"])) { header("Location: index.php"); }
    if ((isset($_POST["who"]) && $_POST["who"] == "") || (isset($_POST["pass"]) && $_POST["pass"] == "")) {
        $error = "<p class='error'>Username and passsword are required<p>";
    }
    // Salted hash used to check password
    elseif (isset($_POST["pass"])) {
        $salt = 'XyZzy12*_';
        $storedHash = '1a52e17fa899cf40fb04cfc42e6352f1'; // Correct hash
        $test = $salt . $_POST["pass"]; // Concat salt and input to check against storedHash
        $md5 = hash('md5', $test);
        if ($md5 != $storedHash) {
            $error = "<p class='error'>Incorrect password</p>";
        } else { // If password is correct, redirect to the game page
            header("Location: game.php?name=" . urlencode($_POST["who"]));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="veiwport" content="width=device-width, initial-scale=1.0">
    <title>Jordan Ballard Rock, Paper, Scissors Login 40392e4f</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <h1>Please Log In</h1>
    <?= $error ?>
    <form method="post" class="login-form">
        <div>
            <label for="who">Username</label>
            <input type="text" id="who" name="who">
        </div>
        <div>
            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass">
        </div>

        <p class="hint">**Password is php123</p>

        <button class="login" type="submit">Log In</buttton>
        <button type="submit" name="cancel">Cancel</buttton>
    </form>

    
</body>
</html>