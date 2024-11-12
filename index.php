<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

echo "This is the text";
echo "<h1> This is the text </h1>";

$name="Somesh";
echo $name;

?>

<h1>
    
    <?php
    
    echo "Thi is under th h1";
    ?>
</h1>
<i>
    
    <?php
    
    echo "Thi is under th italic tag";
    ?>
    
</i>


<h3>

<?php
    
    echo "DOCUMENT_ROOT :-   ". $_SERVER["DOCUMENT_ROOT"];
    echo "<br />";
    echo "PHP_SELF:-   ". $_SERVER["PHP_SELF"];
    echo "<br />";
    echo "SERVER_NAME:-   ". $_SERVER["SERVER_NAME"];
    echo "<br />";
    echo "REQUEST_METHOD:-   ". $_SERVER["REQUEST_METHOD"];
    ?>
</h3>


<?php
echo "$ _GET['name'] :-" . $_GET["name"];
echo "<br />";
echo "$ _GET['eye'] :-" . $_GET["eye"];
echo "<br />";
echo "$ _COOKIE['name'] :-" . $_GET["eye"];
echo "<br />";
echo "$ _SESSION['name'] :-" . $_GET["eye"];
?>

</body>
</html>