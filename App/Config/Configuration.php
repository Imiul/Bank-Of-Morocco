<?php

    # mysql configuration 
    define("Host", "mysql");
    define("Port", "3306");

    define("Username", "docker");
    define("Password", "root");
    
    # database
    define("Db", "BankOfMorocco");

    define("Dns", "mysql:host=". Host .";port=". Port .";dbname=". Db . ";chartset=utf8");

?>