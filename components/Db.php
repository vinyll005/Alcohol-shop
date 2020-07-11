<?php

class Db
{

    public static function getDbConnection()
    {
        $db = mysqli_connect('localhost', 'root', '', 'mvc_alco');
        return $db;
    }

}

?>