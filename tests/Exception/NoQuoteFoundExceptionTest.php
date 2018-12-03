<?php

namespace PagaMasTarde\ModuleUtils\Exception;

/**
 * Class NoQuoteFoundException
 *
 * @package PagaMasTarde\ModuleUtils\Exception
 */
class NoQuoteFoundException extends AbstractException
{
    /**
     * ERROR_MESSAGE
     */
    const ERROR_MESSAGE = 'No quote found';

    /**
     * NoQuoteFoundException constructor.
     */
    public function __construct()
    {
        $this->code = 429;
        $this->message = self::ERROR_MESSAGE;

        return parent::__construct($this->getMessage(), $this->getCode());
    }
}
