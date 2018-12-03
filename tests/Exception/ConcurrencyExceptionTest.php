<?php

namespace PagaMasTarde\ModuleUtils\Exception;

/**
 * Class ConcurrencyException
 *
 * @package PagaMasTarde\ModuleUtils\Exception
 */
class ConcurrencyException extends AbstractException
{
    /**
     * ERROR_MESSAGE
     */
    const ERROR_MESSAGE = 'Validation in progress, try again later';

    /**
     * ConcurrencyException constructor.
     */
    public function __construct()
    {
        $this->code = 429;
        $this->message = self::ERROR_MESSAGE;

        return parent::__construct($this->getMessage(), $this->getCode());
    }
}
