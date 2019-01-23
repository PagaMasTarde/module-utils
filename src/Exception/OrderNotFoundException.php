<?php

namespace PagaMasTarde\ModuleUtils\Exception;

/**
 * Class OrderNotFoundException
 *
 * @package PagaMasTarde\ModuleUtils\Exception
 */
class OrderNotFoundException extends AbstractException
{
    /**
     * ERROR_MESSAGE
     */
    const ERROR_MESSAGE = 'Unable to get the order in Paga+Tarde';

    /**
     * ERROR_CODE
     */
    const ERROR_CODE = 400;

    /**
     * OrderNotFoundException constructor.
     */
    public function __construct()
    {
        $this->code = self::ERROR_CODE;
        $this->message = self::ERROR_MESSAGE;

        return parent::__construct($this->getMessage(), $this->getCode());
    }
}