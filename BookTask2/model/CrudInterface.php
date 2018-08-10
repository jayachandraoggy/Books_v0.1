<?php
/**
 * Created by PhpStorm.
 * User: jay
 * Date: 8/8/18
 * Time: 10:36 PM
 */

interface CrudInterface
{
    /**
     * @param string $query
     * @return array
     */
    public function getData($query);

    /**
     * @param string $query
     * @return bool
     */
    public function execute($query);

    /**
     * @param int $id
     * @param string $table
     * @return bool
     */
    public function delete($id, $table);

    /**
     * @param string $value
     * @return string
     */
    public function escape_string($value);
}