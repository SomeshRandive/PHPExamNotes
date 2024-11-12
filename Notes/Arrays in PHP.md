
Arrays in PHP are a powerful and flexible way to store multiple values in a single variable. PHP arrays can store data in indexed, associative, or multidimensional forms, making them ideal for a wide range of applications.

Here’s a comprehensive guide to working with arrays in PHP:

1. Types of Arrays in PHP
Indexed Arrays
Indexed arrays store elements with numeric indices, starting from 0 by default.



<?php
    $colors = array("Red", "Green", "Blue"); // or $colors = ["Red", "Green", "Blue"];
    echo $colors[0]; // Output: Red
?>
Associative Arrays
Associative arrays use named keys instead of numeric indices, allowing you to assign a unique key to each value.



<?php
    $age = array("John" => 25, "Jane" => 30, "Smith" => 35);
    echo $age["Jane"]; // Output: 30
?>
Multidimensional Arrays
Multidimensional arrays contain arrays within arrays, allowing for data structures that mimic tables or matrices.



<?php
    $students = array(
        array("Name" => "John", "Age" => 20, "Grade" => "A"),
        array("Name" => "Jane", "Age" => 22, "Grade" => "B"),
        array("Name" => "Smith", "Age" => 21, "Grade" => "C")
    );
    echo $students[0]["Name"]; // Output: John
?>
2. Array Functions in PHP
PHP provides numerous built-in functions for handling arrays, making it easy to manipulate and retrieve data.

Creating and Modifying Arrays
array(): Creates an array.

array_push(): Adds one or more elements to the end of an array.



<?php
    $fruits = array("Apple", "Banana");
    array_push($fruits, "Orange");
    print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Orange )
?>
array_pop(): Removes and returns the last element of an array.



<?php
    $fruits = array("Apple", "Banana", "Orange");
    array_pop($fruits);
    print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana )
?>
array_unshift(): Adds elements to the beginning of an array.



<?php
    $fruits = array("Banana", "Orange");
    array_unshift($fruits, "Apple");
    print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Orange )
?>
array_shift(): Removes the first element of an array.



<?php
    $fruits = array("Apple", "Banana", "Orange");
    array_shift($fruits);
    print_r($fruits); // Output: Array ( [0] => Banana [1] => Orange )
?>
Array Information
count(): Returns the number of elements in an array.



<?php
    $colors = array("Red", "Green", "Blue");
    echo count($colors); // Output: 3
?>
Searching Arrays
in_array(): Checks if a value exists in an array.



<?php
    $fruits = array("Apple", "Banana", "Orange");
    echo in_array("Banana", $fruits) ? "Found" : "Not Found"; // Output: Found
?>
array_search(): Searches for a value in an array and returns its index/key.



<?php
    $fruits = array("Apple", "Banana", "Orange");
    echo array_search("Orange", $fruits); // Output: 2
?>
Sorting Arrays
sort(): Sorts an indexed array in ascending order.



<?php
    $numbers = array(3, 2, 5, 1, 4);
    sort($numbers);
    print_r($numbers); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
?>
rsort(): Sorts an indexed array in descending order.



<?php
    $numbers = array(3, 2, 5, 1, 4);
    rsort($numbers);
    print_r($numbers); // Output: Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
?>
asort(): Sorts an associative array by values in ascending order.



<?php
    $age = array("John" => 25, "Jane" => 20, "Smith" => 30);
    asort($age);
    print_r($age); // Output: Array ( [Jane] => 20 [John] => 25 [Smith] => 30 )
?>
ksort(): Sorts an associative array by keys in ascending order.



<?php
    $age = array("John" => 25, "Jane" => 20, "Smith" => 30);
    ksort($age);
    print_r($age); // Output: Array ( [Jane] => 20 [John] => 25 [Smith] => 30 )
?>
Combining Arrays
array_merge(): Merges two or more arrays.



<?php
    $array1 = array("Red", "Green");
    $array2 = array("Blue", "Yellow");
    $result = array_merge($array1, $array2);
    print_r($result); // Output: Array ( [0] => Red [1] => Green [2] => Blue [3] => Yellow )
?>
array_combine(): Creates an array by using one array for keys and another for values.



<?php
    $keys = array("Name", "Age");
    $values = array("John", 25);
    $combined = array_combine($keys, $values);
    print_r($combined); // Output: Array ( [Name] => John [Age] => 25 )
?>
3. Looping Through Arrays
foreach Loop
The foreach loop is ideal for iterating over arrays.



<?php
    $colors = array("Red", "Green", "Blue");
    foreach ($colors as $color) {
        echo $color . "<br>";
    }
?>
For associative arrays, you can use both keys and values:



<?php
    $age = array("John" => 25, "Jane" => 30, "Smith" => 35);
    foreach ($age as $name => $years) {
        echo "$name is $years years old.<br>";
    }
?>
4. Multidimensional Arrays
Multidimensional arrays allow you to store data in a matrix or table format, with arrays nested inside other arrays.



<?php
    $people = array(
        "John" => array("Age" => 25, "City" => "New York"),
        "Jane" => array("Age" => 30, "City" => "Los Angeles"),
        "Smith" => array("Age" => 35, "City" => "Chicago")
    );

    echo $people["John"]["City"]; // Output: New York
5. Array Destructuring (PHP 7.1+)
Array destructuring allows you to directly assign values from arrays to variables.



<?php
    $colors = ["Red", "Green", "Blue"];
    [$first, $second, $third] = $colors;
    echo $first; // Output: Red
?>