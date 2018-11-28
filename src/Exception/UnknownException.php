<?php

namespace PagaMasTarde\ModuleUtils\Exception;

/**
 * Class UnknownException
 *
 * @package PagaMasTarde\ModuleUtils\Exception
 */
class UnknownException extends AbstractException
{
    /**
     * ERROR_MESSAGE
     */
    const ERROR_MESSAGE = 'Unknown Exception: %s';

    /**
     * UnknownException constructor.
     *
     * @param $message
     */
    public function __construct($message)
    {
        $this->code = 500;
        $this->message = sprintf(self::ERROR_MESSAGE, $message);

        return parent::__construct($this->getMessage(), $this->getCode());
    }
}
