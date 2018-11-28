<?php

namespace PagaMasTarde\ModuleUtils\Model;

class JsonResponse
{
    /**
     * @var int $timestamp
     */
    protected $timestamp;

    /**
     * @var string $order_id
     */
    protected $order_id;

    /**
     * @var string $result
     */
    protected $result;

    /**
     * @var int $status
     */
    protected $status;

    public function __construct()
    {
        $this->timestamp = time();
    }

    /**
     * @return false|string
     */
    public function toJson()
    {
        return json_encode($this, JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
    }

    /**
     *
     */
    public function printResponse()
    {
        header("HTTP/1.1 ".$this->getStatus(), true, $this->getStatus());
        header('Content-Type: application/json', true);
        header('Content-Length: ' . strlen($this->toJson()));
        echo ($this->toJson());
        exit();
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param mixed $order_id
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
