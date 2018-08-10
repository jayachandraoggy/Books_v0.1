<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 9/8/18
 * Time: 10:26 AM
 */
//including the database connection file
include_once("../model/Book.php");

$book = new Book();

//getting id of the data from url
$id = $book->escape_string($_GET['id']);

//deleting the row from table
//$result = $book->execute("DELETE FROM users WHERE id=$id");
$result = $book->delete($id, 'books');

if ($result) {
    //redirecting to the display page (index.php in our case)
    header("Location:../index.php");
}
?>