<?php
namespace MVC\Config;
class Database
{
    private static $bdd = null;
    public static function getBdd() {
        if(is_null(self::$bdd)) {
            self::$bdd = new \PDO("mysql:host=localhost;dbname=mvc", 'root', '74269852');
            self::$bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        return self::$bdd;
    }
}
?>