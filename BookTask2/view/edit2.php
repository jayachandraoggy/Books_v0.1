<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 9/8/18
 * Time: 10:21 AM
 */
include_once("../model/Book.php");
include_once '../model/Validation.php';

$book = new Book();
$val = new Validation();

//getting id from url
$id = $book->escape_string($_GET['id']);

$va=$val->validate($id);
//var_dump($va);

if(!$va){
    echo "<script> alert('Invalid ID'); window.location.href='../index.php';</script>";
}

//selecting data associated with this particular id
$result = $book->getData("SELECT * FROM books WHERE id=$id");

foreach ($result as $res) {
    $name = $res['name'];
    $isbn = $res['isbn'];
    $author = $res['author'];
    $category = $res['category'];
}
?>
<html>
<head>
    <title>Edit Book</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<a href="../index.php" style="align-content: center" class="btn btn-primary">Home</a>
<br/><br/>

<form name="form1" method="post" action="../controller/editaction2.php">
    <table border="0" class="table">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $name;?>"></td>
        </tr>
        <tr>
            <td>ISBN</td>
            <td><input type="text" name="isbn" value="<?php echo $isbn;?>"></td>
        </tr>
        <tr>
            <td>Author</td>
            <td><input type="text" name="author" value="<?php echo $author;?>"></td>
        </tr>
        <tr>
            <td>Category</td>
            <td><input type="text" name="category" value="<?php echo $category;?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><input type="submit" name="update" value="Update" class="btn btn-primary"></td>
        </tr>
    </table>
</form>
</body>
</html>
