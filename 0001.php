<?php 

#Problem -  Implement a script that prints Hello World.


$name = "Kim Jihoon";

echo $name . "\n";   // newline in CLI
var_dump($name);

# Output: ----------

#Kim Jihoon
#string(10) "Kim Jihoon"


# Explain_By_Kim_Jihoon

# In PHP, variables (starting with "$") can store different types of values, 
# such as numbers (integers or floats), single characters, or strings (text).
#
# The echo statement outputs the value of a variable directly.
# The var_dump() function, on the other hand, shows both the data type 
# and the value. For example, string(10) "Kim Jihoon" means the variable 
# is a string with 10 characters (spaces are counted as characters too).
#
# The "." operator is used for concatenation, allowing you to combine 
# strings or append extra text.
#
# The "\n" character creates a newline in the CLI, so the results of echo 
# and var_dump appear on separate lines. If you are running the script 
# in a browser, you can use "<br>" instead to achieve the same effect.
