<?php
    if (!isset($_GET["name"]) || $_GET["name"] == "") {
        die("Name parameter missing");
    }
    if (isset($_POST["logout"])) { header("Location: index.php"); }

    $pieces = ["Rock", "Paper", "Scissors"];
    $player = isset($_POST["human"]) ? $_POST['human']+0 : -1; // Add 0 to cast to num
    $computer = rand(0, 2);

    // TTake player and computer choices and determine the winner
    function check($player, $computer) {
        // Computer wins when $computer - $player + 3 is 1 or 4. Either number % 3 is 1
        // Player wins when $computer - $player + 3 is 2 or 5. Either number % 3 is 2
        // Add 3 to avoid negative modulo calculations
        $res = ($computer - $player + 3) % 3;
        if ($res == 0) return "Tie";
        elseif ($res == 1) return "You Lose";
        elseif ($res == 2) return "You Win";
    }

    $result = check($player, $computer);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="veiwport" content="width=device-width, initial-scale=1.0">
    <title>Jordan Ballard Rock, Paper, Scissors Home 40392e4f</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <h1>Rock, Paper, Scissors</h1>
    <p>Welcome <?= htmlentities($_GET["name"]) ?></p>
    <form method="post">
        <select name="human">
            <option value="-1">-- Select --</option>
            <option value="0">Rock</option>
            <option value="1">Paper</option>
            <option value="2">Scissors</option>
            <option value="3">Test</option>
        </select>
        <button type="submit">Play</button>
        <button type="submit" name="logout">Logout</button>
    </form>
    <div class="board">
        <?php
            if (!isset($_POST["human"])) { 
                print "Make a selection and press Play."; 
            } elseif ($_POST["human"] == "3") { // Test the game
                for ($i = 0; $i < 3; $i++) {
                    for ($j = 0; $j < 3; $j++) {
                        $r = check($i, $j);
                        print "Human=$pieces[$i] Computer=$pieces[$j] Result=$r<br>";
                    }
                }
            } else { 
                print "Your Play=$pieces[$player] Computer Play=$pieces[$computer] Result=$result"; 
            }
        ?>
    </div>
</body>
</html>