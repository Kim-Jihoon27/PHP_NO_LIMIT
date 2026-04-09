<?php
$first_Int = 200;
$second_Int = 500;

[$first_Int, $second_Int] = [$second_Int, $first_Int];

echo $first_Int . PHP_EOL;
echo $second_Int . PHP_EOL;

# Explain_By_Kim_Jihoon

# I used PHP's list assignment method to swap the values of two variables.
# This approach is modern, readable, and works with any data type.
# It avoids the need for a temporary variable or arithmetic tricks,
# making it the best practice for swapping in PHP.