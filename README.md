# University of Michigan via Coursera - Building Web Applications in PHP

## Rock-Paper-Scissors

### Assignment Specifications:

When you first come to the application (index.php) you are told to go to a login screen. 

The login.php should be a login screen should present a field for the person's name (name="who") and their password (name="pass"). Your form should have a button labeled "Log In" that submits the form data using method="POST" (i.e. these should not be GET parameters).

The login screen needs to have some error checking on its input data. If either the name or the password field is blank, you should output an error message. If the password is non-blank and incorrect, you should output an error message.

If there are errors, you should come back to the login screen (login.php) and show the error with blank input fields (i.e. don't carry over the values for name="who" and name="pass" fields from the previous post).

You are to use a "salted hash" for the password. The "plaintext" of the password is not to be present in your application source code except in comments.

If the incoming password, properly hashed matches the stored stored_hash value, the user's browser is redirected to the game.php page with the user's name as a GET parameter.

In order to protect the game from being played without the user properly logging in, the game.php must first check the session to see if the user's name is set and if the user's name is not set in the session the game.php must stop immediately using the PHP die() function.

If the user is logged in, they should be presented with a drop-down menu showing the options Rock, Paper, Scissors, and Test as well as buttons labeled "Play" and "Logout".

If the Logout button is pressed the user should be redirected back to the index.php page.

If the user selects, Rock, Paper, or Scissors and presses "Play", the game chooses random computer throw, and scores the game and prints out the result of the game.

The "Test" option requires that you write two nested for loops that tests all combinations of possible human and computer play combinations.
