<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 10/8/18
 * Time: 3:01 PM
 */

include_once 'Book.php';


class Validation
{
    public $book;

    public function __construct()
    {
        $this->book = new Book();
    }



    public function validate($id){
        $result = $this->book->getData("SELECT id FROM books WHERE id=$id");
        //var_dump($result);
        //$check =
        if(isset($result[0]))
            return true;
        else
            return false;
    }
}