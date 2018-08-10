<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 8/8/18
 * Time: 11:13 PM
 */
// including the database connection file
include_once("../model/Book.php");

$book = new Book();


if(isset($_POST['update']))
{
    $id = $book->escape_string($_POST['id']);

    $name = $book->escape_string($_POST['name']);
    $isbn = $book->escape_string($_POST['isbn']);
    $author = $book->escape_string($_POST['author']);
    $category = $book->escape_string($_POST['category']);



    $result = $book->execute("UPDATE books SET name='$name',isbn='$isbn', author='$author', category='$category' WHERE id=$id");

    //redirecting to the display page. In our case, it is index.php
    header("Location: ../index.php");

}
?>