<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 8/8/18
 * Time: 10:39 PM
 */

include_once 'DbConf.php';
include_once 'CrudInterface.php';
//include_once 'External Libraries/PHP Runtime/sqlite3/sqlite3.php';

class Book extends DbConf implements CrudInterface
{

    public $book;
    /**
     * Book constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param string $query
     * @return array|bool
     */
    public function getData($query)
    {
        $result = $this->connection->query($query);

        if ($result == false) {
            return false;
        }

        $rows = array();

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }


    /**
     * @param string $query
     * @return bool
     */
    public function execute($query)
    {
        $result = $this->connection->query($query);

        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }
    }

    /**
     * @param int $id
     * @param string $table
     * @return bool
     */
    public function delete($id, $table)
    {
        $query = "DELETE FROM $table WHERE id = $id";

        $result = $this->connection->query($query);

        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }

    /**
     * @param string $value
     * @return string
     */
    public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }
}