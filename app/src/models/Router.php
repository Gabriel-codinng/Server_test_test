<?php

require "Route.php";

class Router
{
    private array $routes;

    function __construct()
    {
        $this->routes = [];
    }

    function get(string $url, $fn)
    {
        $route = new Route($url, "GET", $fn);
        array_push($this->routes, $route);


    }

    function run($url, $method)
    {

        /**
         * 
         *  REVIEW
         * 
         */

        var_dump(parse_url($url));
        $result = array_filter($this->routes, function ($route) use ($url, $method) {
            return $url === $route->url && $method === $route->method ? $route : null;
        });

        if (count($result) <= 0) {
            print("fuck");
        } else {
            // New route instance to determine the function to execute.
            $controller_obj = new $result[0]->action[0];
            $request = new Request();
            // String that joins the object according to the method to be executed.
            $execute = "\$controller_obj->{$result[0]->action[1]}(\$request);";
            // Reads the string and interprets it as php code.
            eval($execute);
        }
    }

    function getAllroutes()
    {
        var_dump($this->routes);
    }
}
