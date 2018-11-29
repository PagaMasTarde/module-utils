<?php

namespace PagaMasTarde\ModuleUtils\Model;

class JsonExceptionResponse extends JsonResponse
{
    /**
     * @var string $result
     */
    protected $result = 'Order not confirmed';

    /**
     * @var int $status
     */
    protected $statusCode = 500;

    public function setException(\Exception $exception)
    {
        $this->result = $exception->getMessage();
        $this->statusCode = $exception->getCode();
        parent::__construct();
    }
}
