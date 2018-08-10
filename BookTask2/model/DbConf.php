<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 8/8/18
 * Time: 10:34 PM
 */

class DbConf
{
    private $_host = 'localhost';
    private $_username = 'mage';
    private $_password = 'root';
    private $_database = 'book2';

    protected $connection;

    /**
     * DbConf constructor.
     */
    public function __construct()
    {
        if (!isset($this->connection)) {

            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }
        }

        return $this->connection;
    }
}