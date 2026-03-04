<?php
    // # Function Challenges

    // ## Challenge 1: Fahrenheit to Celsius
    // Requirement: Named function, but converted to arrow function for extra points.
    
    $fahrenheitToCelsius = fn($f) => ($f - 32) * (5 / 9);

    echo "## Challenge 1: Fahrenheit to Celsius<br>";
    $f1 = 68;
    $f2 = 32;
    echo $f1 . "&deg;F = " . $fahrenheitToCelsius($f1) . "&deg;C<br>";
    echo $f2 . "&deg;F = " . $fahrenheitToCelsius($f2) . "&deg;C<br>";
    echo "<br>";

    // ---

    // ## Challenge 2: Print Names In Uppercase
    // Requirement: Function that loops through an array and prints names in uppercase.

    $names = ['Alice', 'Bob', 'Charlie', 'David'];

    function printNamesToUpperCase($namesArray) {
        foreach ($namesArray as $name) {
            echo strtoupper($name) . "<br>";
        }
    }

    echo "## Challenge 2: Print Names In Uppercase<br>";
    printNamesToUpperCase($names);
    echo "<br>";

    // ---

    // ## Challenge 3: Find the longest word
    // Requirement: Split sentence, compare lengths, and return the longest word.

    function findLongestWord($sentence) {
        // Split sentence into an array based on spaces
        $words = explode(' ', $sentence);
        $longestWord = '';

        foreach ($words as $word) {
            // If current word is longer than the one stored, update it
            if (strlen($word) > strlen($longestWord)) {
                $longestWord = $word;
            }
        }

        return $longestWord;
    }

    echo "## Challenge 3: Find the longest word<br>";
    $sentence = 'The quick brown fox jumped over the lazy dog';
    $longestWord = findLongestWord($sentence);
    echo "The longest word is: <strong>" . $longestWord . "</strong>"; 
?>