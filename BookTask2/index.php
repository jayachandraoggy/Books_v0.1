<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 8/8/18
 * Time: 10:52 PM
 */
//including the database connection file
include_once("model/Book.php");

$book = new Book();

//fetching data
$query = "SELECT * FROM books ORDER BY id DESC";
$result = $book->getData($query);

?>

<html>
<head>
    <title>Books</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
<h2 align="center">Books</h2>
<br />

<table class="table" border=10px>

    <tr bgcolor='#AACCCC'>
        <th width="40%">Name</th>
        <th>ISBN</th>
        <th width="40%">Author</th>
        <th>Category</th>
        <th>Action</th>

    </tr>
    <?php
    foreach ($result as $key => $res) {

        echo "<tr>";
        echo "<td style=\"margin:10px 900px\">".$res['name']."</td>";
        echo "<td>".$res['isbn']."</td>";
        echo "<td style=\"margin:10px 900px\">".$res['author']."</td>";
        echo "<td>".$res['category']."</td>";
        echo "<td class=\"col-4\"><a class=\"btn btn-primary btn-sm\" href=\"view/edit2.php?id=$res[id]\">Edit</a>  <a class=\"btn btn-primary btn-sm\" href=\"controller/delete2.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        echo "</tr>";

    }
    ?>
</table>
<a href="view/add.html" class="btn btn-primary" style="margin-left: 50%">Add New Book</a>
</body>
</html>
