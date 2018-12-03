<?php

namespace PagaMasTarde\ModuleUtils\Exception;

/**
 * Class AlreadyProcessedException
 *
 * @package PagaMasTarde\ModuleUtils\Exception
 */
class AlreadyProcessedException extends AbstractException
{
    /**
     * ERROR_MESSAGE
     */
    const ERROR_MESSAGE = 'Cart already processed';

    /**
     * AlreadyProcessedException constructor.
     */
    public function __construct()
    {
        $this->code = 200;
        $this->message = self::ERROR_MESSAGE;

        return parent::__construct($this->getMessage(), $this->getCode());
    }
}
