<?php

// Define an associative array of routes and their corresponding controller files.
$routes = [
    "/" => "controllers/Home.php",
];

// Check if the current request URI matches any defined route.
if (array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
    // If a matching route is found, require the corresponding controller file.
    require $routes[$_SERVER['REQUEST_URI']];
} else {
    // If no matching route is found, display a 404 error message.
    echo "ERROR 404";
}
