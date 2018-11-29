<?php

namespace PagaMasTarde\ModuleUtils\Model;

use Nayjest\StrCaseConverter\Str;

class JsonResponse implements \JsonSerializable
{
    /**
     * @var int $timestamp
     */
    protected $timestamp;

    /**
     * @var string $merchantOrderId
     */
    protected $merchantOrderId;

    /**
     * @var string $pmtOrderId
     */
    protected $pmtOrderId;

    /**
     * @var string $result
     */
    protected $result = 'Order confirmed';

    /**
     * @var int $status
     */
    protected $statusCode = 200;

    /**
     * JsonResponse constructor.
     */
    public function __construct()
    {
        $this->timestamp = time();
    }

    /**
     * @return false|string
     */
    public function toJson()
    {
        $response = $this->jsonSerialize();

        return json_encode($response, JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $arrayProperties = array();

        foreach ($this as $key => $value) {
            $arrayProperties[Str::toSnakeCase($key)] = $value;
        }

        return $arrayProperties;
    }

    /**
     * Post response
     */
    public function printResponse()
    {
        header("HTTP/1.1 ".$this->getStatusCode(), true, $this->getStatusCode());
        header('Content-Type: application/json', true);
        header('Content-Length: ' . strlen($this->toJson()));
        echo ($this->toJson());
        exit();
    }

    /**
     * GETTERS Y SETTERS
     */

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param int $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return string
     */
    public function getMerchantOrderId()
    {
        return $this->merchantOrderId;
    }

    /**
     * @param string $merchantOrderId
     */
    public function setMerchantOrderId($merchantOrderId)
    {
        $this->merchantOrderId = $merchantOrderId;
    }

    /**
     * @return string
     */
    public function getPmtOrderId()
    {
        return $this->pmtOrderId;
    }

    /**
     * @param string $pmtOrderId
     */
    public function setPmtOrderId($pmtOrderId)
    {
        $this->pmtOrderId = $pmtOrderId;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param string $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }
}
