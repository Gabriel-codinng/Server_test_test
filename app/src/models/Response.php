<?php

class Response
{
    public int $statusCode;
    protected array $headers = array();

    public function setStatusCode(int $code)
    {
        $this->statusCode = $code;
    }

    public function setBody($data)
    {
        $this->headers[] = ['Body' => json_encode($data)];
    }

    public function setContentType($data)
    {
        $this->headers[] = ['Content-Type' => $data];
    }

    public function sendResponse()
    {
        // foreach ($this->headers as $header) {
        //     header(json_encode($header));
        // }
        return json_encode(['Status' => $this->statusCode, 'Headers' => $this->headers]);
    }
}
