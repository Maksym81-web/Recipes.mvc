<?php

class Tag extends Model
{
    public static function getTable() 
    {
        return 'tags';
    }

    public static function add($params)
    {
        self::connectDB();
        $table = self::getTable();
        $sql = "INSERT INTO `$table`(`name`) VALUES (:name)";
        $stmt = self::$db->prepare($sql);
        $result = $stmt->execute($params);
        if ($result === false) {
            throw new Exception ('tag_add');
        }
    }
}