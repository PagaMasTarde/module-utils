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
     * NoOrderFoundException constructor.
     */
    public function __construct()
    {
        $this->code = 400;
        $this->message = self::ERROR_MESSAGE;

        return parent::__construct($this->getMessage(), $this->getCode());
    }
}
