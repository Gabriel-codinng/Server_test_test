<?php

class Route
{
    var string $url;
    var string $method;
    var $action;

    function __construct(string $url, string $method, $action)
    {
        $this->url = $url;
        $this->method = $method;
        $this->action = $action;
    }
}