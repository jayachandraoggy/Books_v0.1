<html>
<head>
    <title>Add Book</title>
</head>

<body>
<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 8/8/18
 * Time: 10:58 PM
 */
//including the database connection file
include_once("../model/Book.php");

$book = new Book();


if(isset($_POST['Submit'])) {
    $name = $book->escape_string($_POST['name']);
    $isbn = $book->escape_string($_POST['isbn']);
    $author = $book->escape_string($_POST['author']);
    $category = $book->escape_string($_POST['category']);



    //insert data to database
    $result = $book->execute("INSERT INTO books(name,isbn, author, category) VALUES('$name','$isbn','$author','$category')");

    //display success message
    //echo "<font color='green'>Data added successfully.";
    //echo "<br/><a href='index.php'>View Result</a>";

    echo "<script> alert('Data added successfully.'); window.location.href='../index.php';</script>";

}
?>
</body>
</html>
