<?php

namespace PagaMasTarde\ModuleUtils\Exception;

/**
 * Class NoIdentificationException
 *
 * @package PagaMasTarde\ModuleUtils\Exception
 */
class NoIdentificationException extends AbstractException
{
    /**
     * ERROR_MESSAGE
     */
    const ERROR_MESSAGE = 'We can not get the PagaMasTarde identification in database';

    /**
     * NoIdentificationException constructor.
     */
    public function __construct()
    {
        $this->code = 404;
        $this->message = self::ERROR_MESSAGE;

        return parent::__construct($this->getMessage(), $this->getCode());
    }
}
