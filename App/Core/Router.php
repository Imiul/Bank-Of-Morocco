<?php

    # Require Helpers FIle 
    require_once(__DIR__."/Helpers.php");

    # Get The Requested URI
    $uri = parse_url($_SERVER['REQUEST_URI'])["path"];

    # Project Router 
    $router = [
        "/" => "../Views/Pages/index.php",
        "/Login" => loadAct("Login"),
    ];


    # Check If Exists If URI Exists 
    if (array_key_exists($uri, $router)) {
        require_once($router[$uri]);
    } else {

        # Load 404 Page
        http_response_code(404);
        require_once(loadError("404"));
        die();
    }

?>