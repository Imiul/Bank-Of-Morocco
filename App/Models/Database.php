<?php

    # Require Configuration File
    require_once(__DIR__."/../Config/Configuration.php");

    # Database Class 
    class Database {

        protected $pdo;

        public function connect()
        {
            try {

                $pdo = new PDO(Dns, Username, Password);
                return $pdo;

            } catch (PDOException $e) {
                echo "Connection Failed !" . $e->getMessage();
                die();
            }
        }
    }

?>