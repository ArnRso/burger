<?php

    class Database{
        private static $dbHost = "localhost";
        private static $dbName = "arnrso_burger";
        private static $dbUser = "arnrso_burger";
        private static $dbPassword = "RsoArn91*";

        private static $connection = null;

        public static function connect() {
            try {
                self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbPassword);
            }
            catch(PDOException $e) {
                die($e->getMessage());
            }

            return self::$connection;
        }

        public static function disconnect() {
            self::$connection = null;
        }

    }

    Database::connect();
?>