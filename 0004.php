<?php

#Problem - Detect whether a given integer (from STDIN) is even or odd.

function even_or_odd($prompt) :string{
    echo $prompt;   
    
    do {
        $line = trim(fgets(STDIN));
        
        if(!is_numeric($line) || strpos($line, '.') !== false){
            echo $line . " is not an integer." . PHP_EOL;
            echo "Please write an integer: ";
            continue;
        }
        
        break;

    } while (true);

      return ($line % 2 === 0) ? $line . " is an Even number" : $line . " is an Odd number";
}

echo even_or_odd("Enter an integer: ". PHP_EOL);

# Explain_By_Kim_Jihoon

# This function determines if an integer from user input is even or odd.
# 1. Takes a $prompt string to display to the user.
# 2. Uses a do-while loop to repeatedly ask for input until a valid integer is entered.
# 3. Validates input: is_numeric() checks if the input is a number, strpos() rejects decimals (floats).
# 4. If invalid, displays the invalid input and prompts again.
# 5. Uses modulo operator (%) to check divisibility by 2.
# 6. Returns a string describing whether the number is even or odd.

# Control Flow Keywords:
# - continue: Skips the rest of the current loop iteration and restarts the loop from the top.
#   Here, when input is invalid, it shows the error message and immediately loops back to ask for new input,
#   bypassing the break statement.
# - break: Exits the loop entirely. When a valid integer is entered, break stops the infinite do-while(true)
#   loop so the function can proceed to return the result. Without break, the loop would run forever.