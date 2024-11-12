In PHP, superglobals are predefined variables that are always accessible, regardless of scope. These variables can be accessed from anywhere within the script, including functions and classes, without needing the global keyword.

Here’s an overview of PHP’s most commonly used superglobal variables:

1. $_GLOBALS
An associative array containing all global variables in the script.

Useful for accessing global variables from anywhere in the script.



<?php
    $name = "Alice";
    function printName() {
        echo $_GLOBALS['name']; // Accesses the global $name variable
    }
    printName(); // Output: Alice
?>

2. $_SERVER
Contains information about the server environment, headers, paths, and script locations.

Useful for getting details about the server and the request.



<?php
    echo $_SERVER['SERVER_NAME'];     // Output: Server name (e.g., localhost)
    echo $_SERVER['HTTP_USER_AGENT']; // Output: User's browser details
    echo $_SERVER['REQUEST_METHOD'];  // Output: GET or POST
?>

3. $_GET
An associative array of variables passed to the current script via URL parameters.

Useful for retrieving data sent in the query string of a URL.



<?php
    // URL: http://example.com/page.php?name=Alice&age=25
    echo $_GET['name']; // Output: Alice
    echo $_GET['age'];  // Output: 25
?>

4. $_POST
An associative array of variables passed to the current script via the HTTP POST method.

Commonly used to collect form data submitted with method="post".



<?php
    // Assuming a form submission with fields 'username' and 'password'
    echo $_POST['username']; // Outputs the submitted username
    echo $_POST['password']; // Outputs the submitted password
?>

5. $_REQUEST
Combines the contents of $_GET, $_POST, and $_COOKIE.

Provides a simple way to access request variables regardless of the method used.



<?php
    // URL: http://example.com/page.php?name=Alice
    echo $_REQUEST['name']; // Output: Alice
?>

6. $_FILES
An associative array of items uploaded to the current script via the HTTP POST method.

Used for handling file uploads, with details about the file such as name, type, size, temporary location, and error status.



<?php
    // Handling a file upload
    echo $_FILES['uploadedFile']['name']; // Output: File name
    echo $_FILES['uploadedFile']['type']; // Output: File type (e.g., image/jpeg)
    echo $_FILES['uploadedFile']['size']; // Output: File size in bytes
?>

7. $_ENV
Contains environment variables passed to the script.

Can vary based on server configuration and typically used for configuration or system-specific variables.



<?php
    echo $_ENV['PATH']; // Outputs the system path environment variable
?>

8. $_COOKIE
An associative array of variables passed to the current script via HTTP cookies.

Used to store and retrieve user information stored on the client side.



<?php
    // Setting a cookie
    setcookie("user", "Alice", time() + 3600); // Expires in 1 hour

    // Accessing the cookie
    echo $_COOKIE['user']; // Output: Alice
?>


9. $_SESSION
An associative array containing session variables.

Used to store information that persists across multiple pages, such as user login status.



<?php
    session_start();
    $_SESSION['username'] = "Alice";
    echo $_SESSION['username']; // Output: Alice
?>
Summary of PHP Superglobals
Superglobal	Description
- $_GLOBALS	Contains all global variables.
- $_SERVER	Contains information about the server environment and request.
- $_GET	Contains URL query parameters (GET data).
- $_POST	Contains form data sent via POST.
- $_REQUEST	Combines $_GET, $_POST, and $_COOKIE.
- $_FILES	Contains information about uploaded files.
- $_ENV	Contains environment variables.
- $_COOKIE	Contains variables passed via HTTP cookies.
- $_SESSION	Contains session variables for maintaining state across pages.

    Each superglobal serves a specific purpose, allowing PHP to manage various types of data and request information effectively. Understanding these will help you interact with user data, server information, and maintain application state.