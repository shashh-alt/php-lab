<?php
function classifyNumber($num) {
    if ($num <= 0) {
        return "Please enter a positive integer.";
    }

    $sum = 0;

    
    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }


    if ($sum == $num) {
        return "$num is a Perfect number.";
    } elseif ($sum > $num) {
        return "$num is an Abundant number.";
    } else {
        return "$num is a Deficient number.";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["number"];
    if (is_numeric($input) && intval($input) == $input) {
        echo classifyNumber((int)$input);
    } else {
        echo "Please enter a valid integer.";
    }
}
?>

<html>
<head>
    <title>Number Classifier</title>
</head>
<body>
    <h2>Check if a Number is Perfect, Abundant or Deficient</h2>
    <form method="post">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Check">
    </form>
</body>
</html>
