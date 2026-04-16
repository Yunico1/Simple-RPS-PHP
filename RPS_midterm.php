<?php
$choice = ["rock", "paper", "scissors"];
$result = null;
$bot = null;
$user = null;
// 🤖  ✂️  📃  🪨
if (isset($_POST['choice'])) { // checks if there is a value in the choice button
    $user = $_POST['choice']; // will going to check the user choice
    $bot = $choice[array_rand($choice)]; // randomizer for the bot choice

    if ($user === $bot) {
        $result = "It's a draw! ⚔️ Both chose $user.";
    } elseif (
        ($user === "rock" and $bot === "scissors") or ($user === "paper" and $bot === "rock") or ($user === "scissors" and $bot === "paper")
    ) {
        $result = "You win! 👤user wins, $user beats $bot.";
    } else {
        $result = "You lose 🤖 bot wins, $bot beats $user.";
    }
}

if (isset($_POST['reset'])) {
    $result = "You Reset!";
    $user = null;
    $bot = null;
    $choice = null;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>RPS</title>
    <link rel=stylesheet href="style.css">
</head>
<body>
    <h1>Rock, Paper, Scissors! FAHHHH!!</h1><br>
    <form method="post">
        <button type="submit" name="choice" value="rock" class="choice-btn">
            <img src="rock.png" alt="Rock">
        </button>
        <button type="submit" name="choice" value="paper" class="choice-btn">
            <img src="paper.png" alt="Paper">
        </button>
        <button type="submit" name="choice" value="scissors" class="choice-btn">
            <img src="scissors.png" alt="Scissors">
        </button>
</form>

    <div class="result-box">
<?php
    if ($user and $bot){
        
        echo "<p>User's Choice: <img src='{$user}.png' alt='{$user}' width='50' height='50'></p>";
        echo "<p>Bot's Choice: <img src='{$bot}.png' alt='{$bot}' width='50' height='50'></p>";
       }
       echo $result;
?>
    </div>
    <div class="reset-button">
    <form method="post" class="reset-mb">
        <button type="submit" name="reset" class="reset-b">Reset</button>
    </form>
</div>


</body>
</html>
</body>
</html>