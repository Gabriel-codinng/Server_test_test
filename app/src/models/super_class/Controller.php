<?php
require "./src/models/Request.php";
require "./src/models/Response.php";

class Controller
{
    protected Request $request;
    protected Response $response;

    public function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
    }
}