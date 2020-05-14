<?php

namespace App\Traits;

trait ApiResponse
{
    protected $meta;
    protected $data;
    protected $response;

    /**
     * @param string @key
     * @param string @value
     * 
     */
    protected function setMeta($key, $value)
    {
        $this->meta[$key] = $value;
    }

    /**
     * @param string @key
     * @param string @value
     * 
     */
    protected function setData($key, $value)
    {
        $this->data[$key] = $value;
    }

    /**
     * @return mixed
     */
    protected function setResponse()
    {
        $this->response['meta'] = $this->meta;
        if ($this->data !== null) {
            $this->response['data'] = $this->data;
        }
        $this->meta = array();
        $this->data = array();
        return $this->response;
    }
}
