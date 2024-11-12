PHP operators are special symbols or keywords that perform operations on values and variables. They are essential for building expressions and creating logic in PHP code. Here’s an overview of the different types of operators in PHP:

1. Arithmetic Operators
These operators are used to perform common mathematical operations.

Operator	Description	Example
+	Addition	$a + $b
-	Subtraction	$a - $b
*	Multiplication	$a * $b
/	Division	$a / $b
%	Modulus (remainder)	$a % $b
**	Exponentiation (power)	$a ** $b
Example:



<?php
    $a = 10;
    $b = 2;
    echo $a + $b; // Output: 12
    echo $a ** $b; // Output: 100
?>


2. Assignment Operators
Assignment operators are used to assign values to variables.

Operator	Description	Example
=	Assign	$a = $b
+=	Add and assign	$a += $b
-=	Subtract and assign	$a -= $b
*=	Multiply and assign	$a *= $b
/=	Divide and assign	$a /= $b
%=	Modulus and assign	$a %= $b
Example:



<?php
    $a = 10;
    $a += 5; // $a = $a + 5, so $a is now 15
    echo $a; // Output: 15
?>

3. Comparison Operators
Comparison operators are used to compare two values.

Operator	Description	Example
==	Equal	$a == $b
===	Identical (equal and same type)	$a === $b
!=	Not equal	$a != $b
<>	Not equal	$a <> $b
!==	Not identical	$a !== $b
>	Greater than	$a > $b
<	Less than	$a < $b
>=	Greater than or equal to	$a >= $b
<=	Less than or equal to	$a <= $b
<=>	Spaceship (returns -1, 0, or 1)	$a <=> $b
Example:



<?php
    $a = 10;
    $b = 20;
    echo $a <=> $b; // Output: -1, because $a is less than $b
?>
4. Increment/Decrement Operators
These operators are used to increase or decrease the value of a variable by 1.

Operator	Description	Example
++$a	Pre-increment	Increments $a by 1, then returns $a.
$a++	Post-increment	Returns $a, then increments $a by 1.
--$a	Pre-decrement	Decrements $a by 1, then returns $a.
$a--	Post-decrement	Returns $a, then decrements $a by 1.
Example:



<?php
    $a = 5;
    echo ++$a; // Output: 6 (pre-increment)
    echo $a--; // Output: 6, then $a becomes 5 (post-decrement)
?>
5. Logical Operators
Logical operators are used to combine conditional statements.

Operator	Description	Example
&&	AND (both must be true)	$a && $b
`		`
!	NOT (reverses true/false)	!$a
and	AND (lower precedence)	$a and $b
or	OR (lower precedence)	$a or $b
xor	XOR (only one can be true)	$a xor $b
Example:



<?php
    $a = true;
    $b = false;
    echo $a && $b; // Output: (empty), because false is returned
    echo $a || $b; // Output: 1, because true is returned
?>
6. String Operators
PHP offers two operators specifically for string manipulation.

Operator	Description	Example
.	Concatenation	$a . $b
.=	Concatenation and assign	$a .= $b
Example:



<?php
    $greeting = "Hello";
    $greeting .= " World!";
    echo $greeting; // Output: Hello World!
?>
7. Array Operators
Array operators are used to compare and manipulate arrays.

Operator	Description	Example
+	Union (combines arrays)	$a + $b
==	Equality (same key-value pairs)	$a == $b
===	Identity (same key-value pairs in same order)	$a === $b
!=	Inequality	$a != $b
<>	Inequality	$a <> $b
!==	Non-identity	$a !== $b
Example:



<?php
    $arr1 = array("a" => "red", "b" => "green");
    $arr2 = array("c" => "blue", "d" => "yellow");
    $result = $arr1 + $arr2;
    print_r($result); 
    // Output: Array ( [a] => red [b] => green [c] => blue [d] => yellow )
?>
8. Type Operators
Type operators check if an object is an instance of a particular class.

Operator	Description	Example
instanceof	Checks if an object is an instance of a class	$obj instanceof ClassName
Example:



<?php
    class Car {}
    $myCar = new Car();
    echo $myCar instanceof Car; // Output: 1 (true)
?>
9. Null Coalescing Operator
The null coalescing operator ?? checks if a variable exists and is not null; if it is null, it returns a default value.



<?php
    $username = $_GET['username'] ?? 'Guest';
    echo $username; // Output: 'Guest' if 'username' is not set in the query string
?>
10. Spaceship Operator
The spaceship operator <=> is used to compare two expressions. It returns -1, 0, or 1, depending on whether the left side is less than, equal to, or greater than the right side.



<?php
    echo 10 <=> 20; // Output: -1
    echo 20 <=> 20; // Output: 0
    echo 30 <=> 20; // Output: 1
?>
