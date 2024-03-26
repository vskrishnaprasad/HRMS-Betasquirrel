<?php

namespace OneHRMS\database;

use mysqli;

class Database
{
    private static $host = "127.0.0.1";
    private static $dbName  = "one_hrms";
    private static $username = "root";
    private static $password = "";
    private static $conn;

    public static function connect()
    {
        self::$conn = null;
        self::$conn = new mysqli(self::$host, self::$username, self::$password, self::$dbName);

        if (self::$conn->connect_error) {
            die("connection failed:" . self::$conn->connect_error);
        }
        return self::$conn;
    }
    public static function close()
    {
        if (self::$conn !== null) {
            self::$conn->close();
            self::$conn = null;
        }
    }
    public function __destruct()
    {
        self::close();
    }
}
