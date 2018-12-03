<?php

namespace PagaMasTarde\ModuleUtils\Exception;

/**
 * Class NoOrderFoundException
 *
 * @package PagaMasTarde\ModuleUtils\Exception
 */
class NoOrderFoundException extends AbstractException
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
     * NoOrderFoundException constructor.
     */
    public function __construct()
    {
        $this->code = self::ERROR_CODE;
        $this->message = self::ERROR_MESSAGE;

        return parent::__construct($this->getMessage(), $this->getCode());
    }
}
