<?php

namespace PagaMasTarde\ModuleUtils\Exception;

/**
 * Class WrongStatusException
 *
 * @package PagaMasTarde\ModuleUtils\Exception
 */
class WrongStatusException extends AbstractException
{
    /**
     * ERROR_MESSAGE
     */
    const ERROR_MESSAGE = 'Order status is not authorized. Current status: %s';

    /**
     * WrongStatusException constructor.
     *
     * @param $currentStatus
     */
    public function __construct($currentStatus)
    {
        $this->code = 403;
        $this->message = sprintf(self::ERROR_MESSAGE, $currentStatus);

        return parent::__construct($this->getMessage(), $this->getCode());
    }
}
