Control structures in PHP allow you to manage the flow of your code based on different conditions or loops. They help make decisions, repeat certain blocks of code, and manage complex logic. Here’s an overview of the main control structures in PHP:

1. Conditional Statements
Conditional statements allow you to execute code only if a certain condition is true.

if Statement
The if statement executes code if a specified condition is true.

php
Copy code
<?php
    $age = 18;
    if ($age >= 18) {
        echo "You are eligible to vote.";
    }
?>
if...else Statement
The if...else statement executes code if the condition is true; otherwise, it executes the code in the else block.

php
Copy code
<?php
    $age = 16;
    if ($age >= 18) {
        echo "You are eligible to vote.";
    } else {
        echo "You are not eligible to vote.";
    }
?>
if...elseif...else Statement
This statement allows multiple conditions. The code executes the first true condition and skips the others.

php
Copy code
<?php
    $score = 75;
    if ($score >= 90) {
        echo "Grade: A";
    } elseif ($score >= 80) {
        echo "Grade: B";
    } elseif ($score >= 70) {
        echo "Grade: C";
    } else {
        echo "Grade: F";
    }
?>
switch Statement
The switch statement is an alternative to if...elseif...else when you want to compare a variable to multiple values.

php
Copy code
<?php
    $day = "Monday";
    switch ($day) {
        case "Monday":
            echo "Start of the week.";
            break;
        case "Friday":
            echo "Almost weekend!";
            break;
        default:
            echo "A regular day.";
    }
?>
2. Looping Statements
Loops execute a block of code multiple times until a specified condition is met.

while Loop
The while loop repeats as long as the specified condition is true.

php
Copy code
<?php
    $count = 1;
    while ($count <= 5) {
        echo "Count: $count <br>";
        $count++;
    }
?>
do...while Loop
The do...while loop executes at least once, then continues while the condition is true.

php
Copy code
<?php
    $count = 1;
    do {
        echo "Count: $count <br>";
        $count++;
    } while ($count <= 5);
?>
for Loop
The for loop is ideal when you know the exact number of iterations.

php
Copy code
<?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Iteration: $i <br>";
    }
?>
foreach Loop
The foreach loop is specifically for iterating over arrays, accessing each element in turn.

php
Copy code
<?php
    $colors = array("Red", "Green", "Blue");
    foreach ($colors as $color) {
        echo "Color: $color <br>";
    }
?>
3. Jump Statements
Jump statements alter the normal flow of code by skipping or terminating loops.

break Statement
The break statement exits a loop or switch immediately.

php
Copy code
<?php
    for ($i = 1; $i <= 5; $i++) {
        if ($i == 3) {
            break;
        }
        echo "Iteration: $i <br>";
    }
?>
continue Statement
The continue statement skips the current iteration and proceeds to the next one.

php
Copy code
<?php
    for ($i = 1; $i <= 5; $i++) {
        if ($i == 3) {
            continue;
        }
        echo "Iteration: $i <br>";
    }
?>
goto Statement
The goto statement transfers control to another line marked by a label.

php
Copy code
<?php
    for ($i = 1; $i <= 5; $i++) {
        if ($i == 3) {
            goto end;
        }
        echo "Iteration: $i <br>";
    }
    end:
    echo "Exited the loop.";
?>
4. Ternary Operator
The ternary operator provides a shorthand way of writing if...else conditions. It uses the syntax condition ? value_if_true : value_if_false.

php
Copy code
<?php
    $age = 20;
    $status = ($age >= 18) ? "Adult" : "Minor";
    echo $status; // Output: Adult
?>
5. Null Coalescing Operator
The null coalescing operator ?? checks if a variable exists and is not null; if it is null, it returns a default value.

php
Copy code
<?php
    $username = $_GET['username'] ?? 'Guest';
    echo $username; // Output: 'Guest' if 'username' is not set in the query string
?>