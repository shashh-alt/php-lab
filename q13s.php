<?php
function reverseString($input) {
    return strrev($input);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = $_POST["user_string"];
    $reversed = reverseString($userInput);
    echo "<h3>Original String:</h3> " . htmlspecialchars($userInput);
    echo "<h3>Reversed String:</h3> " . htmlspecialchars($reversed);
}
?>


<html>
<head>
    <title>Reverse String</title>
</head>
<body>
    <h2>Enter a string to reverse it:</h2>
    <form method="post">
        <input type="text" name="user_string" required>
        <input type="submit" value="Reverse">
    </form>
</body>
</html>
