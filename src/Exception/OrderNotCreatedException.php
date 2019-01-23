<?php

namespace PagaMasTarde\ModuleUtils\Exception;

/**
 * Class OrderNotCreatedException
 *
 * @package PagaMasTarde\ModuleUtils\Exception
 */
class OrderNotCreatedException extends AbstractException
{
    /**
     * ERROR_MESSAGE
     */
    const ERROR_MESSAGE = 'Unable to create order with the data provided';

    /**
     * ERROR_CODE
     */
    const ERROR_CODE = 400;

    /**
     * OrderNotCreatedException constructor.
     */
    public function __construct()
    {
        $this->code = self::ERROR_CODE;
        $this->message = self::ERROR_MESSAGE;

        return parent::__construct($this->getMessage(), $this->getCode());
    }
}
