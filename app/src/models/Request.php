<?php

class Request
{
    public $host;
    public $browser;
    public $server_name;
    public $server_address;
    public $remote_address;
    public $port;
    public $uri;

    function __construct()
    {
        $this->host = $_SERVER['HTTP_HOST'];
        $this->browser= $_SERVER['HTTP_USER_AGENT'];
        $this->server_name = $_SERVER['SERVER_NAME'];
        $this->server_address = $_SERVER['SERVER_ADDR'];
        $this->port = $_SERVER['SERVER_PORT'];
        $this->uri= $_SERVER['REQUEST_URI'];
        $this->remote_address = $_SERVER['REMOTE_ADDR'];
    }
}