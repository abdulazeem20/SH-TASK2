<?php
$age = readline("Input Your age: ");
$hasPvc = readline("Already With a PVC(Yes or No): ");
$pollUnit = readline("Your Polling Unit Code: ");
function validateUser($age, $hasPvc, $pollUnit)
{
    if ($age < 18) {
        $result = "Not eligible to vote because you are still below 18 years of age";
    } else if (strtolower($hasPvc) != "yes") {
        $result = "Not eligible to vote because you haven't gotten your voters card yet";
    } else if ($pollUnit != "020") {
        $result = "Not eligible to vote because your polling unit isn't 020";
    } else {
        $result = "eligible to vote";
    }
    return $result;
}

echo "Result: " . validateUser($age, $hasPvc, $pollUnit);