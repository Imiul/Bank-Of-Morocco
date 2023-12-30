<?php

    # Helping Functions 
    
    function dump($value)
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }

    function loadAct($fileName) 
    {
        $file = __DIR__ . "/../Views/Pages/Act/" . $fileName . ".php";
        return $file;
    }

    function loadAdmin($fileName) 
    {
        $file = __DIR__ . "/../Views/Pages/Act/Admin/" . $fileName . ".php";
        return $file;
    }

    function loadUser($fileName) 
    {
        $file = __DIR__ . "/../Views/Pages/Act/User/" . $fileName . ".php";
        return $file;
    }

    function loadError($error) 
    {
        $file = __DIR__ . "/../Views/Pages/Error/" . $error . ".php";
        return $file; 
    }
    

?>