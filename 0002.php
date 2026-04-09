<?php

#Problem - Write a CLI program that reads two integers and prints their Sum.

function get_the_sum(int $a, int $b): int {
    return $a + $b;
}

function read_int_from_stdin($prompt): int {
    echo $prompt;
    $line = trim(fgets(STDIN));

    if (!ctype_digit($line) && !($line[0] === '-' && ctype_digit(substr($line, 1)))) {
        echo "Error: Not a valid integer.\n";
        exit(1);
    }

    return(int) $line;
}

$a = read_int_from_stdin("Enter first integer: ");
$b = read_int_from_stdin("Enter second integer: ");

echo "Sum: " . get_the_sum($a, $b) . PHP_EOL;


# Explain_By_Kim_Jihoon


# 1. get_the_sum(int $a, int $b): int
#    - Accepts TWO integers only (enforced by type hints)
#    - Returns an integer (enforced by : int return type)
#    - PHP throws TypeError if wrong types are passed

# 2. read_int_from_stdin($prompt): int
#    - Displays a prompt to the user
#    - Reads one line from STDIN using fgets(STDIN)
#    - trim() removes the trailing newline (\n)
#    - ctype_digit() validates that input is all digits
#    - Extra check for negatives using $line[0] and substr($line, 1)
#    - Returns value cast to (int)
#    - Calls exit(1) if input is NOT a valid integer

# 3. STDIN — PHP built-in constant
#    - Available automatically in CLI mode
#    - No need to fopen("php://stdin", "r")
#    - Works like a file pointer: fgets(STDIN) reads one line

# 4. ctype_digit() behavior:
#    "123"  => true  (all digits)
#    "-5"   => false (minus sign is NOT a digit)
#    "12a"  => false (contains letter)
#    "  5"  => false (contains space)

# 5. Understanding $line[0] and substr($line, 1)
#    ctype_digit() rejects "-" so we check negatives manually.
#
#    $line[0] → accesses the FIRST character of the string (index 0)
#    substr($line, 1) → returns everything AFTER index 0 (starting at index 1)
#
#    Example: "-150"
#      $line[0]          => "-"     (first char is the minus sign)
#      substr($line, 1)  => "150"   (everything after the minus)
#      ctype_digit("150") => true   (all digits → valid negative integer!)
#
#    More examples:
#      substr("-5", 1)    => "5"    (valid)
#      substr("-100", 1)  => "100"  (valid)
#      substr("-", 1)     => ""     (empty → rejected)
#      substr("-a5", 1)   => "a5"   (not digits → rejected)
#
#    The logic: "If the first char is '-', is the rest all digits?"

# 6. PHP_EOL — cross-platform newline (better than "\n")
#    Works consistently on Windows, Linux, and Mac.

# 7. exit(1) — fail fast on bad input
#    Stops execution immediately.
#    Exit code 1 tells the OS/shell that an error occurred.

# 8. Negative numbers work correctly:
#    -150 + -150 = -300
#    The (int) cast converts "-150" string to actual -150 integer,
#    and PHP handles negative math properly.






#Bonus Point about STDIN 

// function custom_input($prompt): string{
//     echo $prompt;
//     $line = fgets(STDIN);

//     return (string) $line;
// }

// echo "Hello " . custom_input("What's your name?" . PHP_EOL);

