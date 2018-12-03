<?php

namespace PagaMasTarde\ModuleUtils\Exception;

/**
 * Class MerchantOrderNotFoundException
 *
 * @package PagaMasTarde\ModuleUtils\Exception
 */
class MerchantOrderNotFoundException extends AbstractException
{
    /**
     * ERROR_MESSAGE
     */
    const ERROR_MESSAGE = 'Merchant order not found';

    /**
     * MerchantOrderNotFoundException constructor.
     */
    public function __construct()
    {
        $this->code = 404;
        $this->message = self::ERROR_MESSAGE;

        return parent::__construct($this->getMessage(), $this->getCode());
    }
}
