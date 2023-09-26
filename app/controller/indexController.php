<?php
require "./src/models/super_class/Controller.php";

class IndexController extends Controller
{
    public function helloWorld()
    {
        $this->response->setStatusCode(200);
        $this->response->setBody(array('hello' => 'world'));
        $this->response->setContentType("application/json; charset=utf-8");
        // echo "<pre>";
        // var_dump($this->request);
        // echo "</pre>";
        // echo "<pre>";
        // var_dump($this->response);
        // echo "</pre>";

        echo $this->response->sendResponse();
    }
}