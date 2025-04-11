<?php

class Model 
{
    protected static $db;

    public static function connectDB()
    {
        if (self::$db) {
            return;
        } 
        $host_dbname = 'mysql:host=localhost;dbname=recipes_mvc';

        $user = 'root';

        $password = '';

        self::$db = new PDO($host_dbname, $user, $password);
    }

    public static function findAll()
    {
        self::connectDB();
        $table = static::getTable();

        $sql = "SELECT * FROM `$table`";

        $stmt = self::$db->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function delete($id) 
    {
        self::connectDB();
        $table = static::getTable();

        $sql = "DELETE FROM `$table` WHERE `id` = '$id'";

        return self::$db->exec($sql);
    }

    public static function findOne($id)
    {
        self::connectDB();
        $table = static::getTable();

        $sql = "SELECT * FROM `$table` WHERE `id` = '$id'";

        $stmt = self::$db->query($sql);

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }
}