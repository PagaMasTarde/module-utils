<?php

namespace PagaMasTarde\ModuleUtils\Model;

/**
 * Class JsonSuccessResponse
 * @package PagaMasTarde\ModuleUtils\Model
 */
class JsonSuccessResponse extends JsonResponse
{
    /**
     * @var string $result
     */
    protected $result = 'Order confirmed';

    /**
     * @var int $status
     */
    protected $statusCode = 200;

}
