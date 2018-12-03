<?php

namespace PagaMasTarde\ModuleUtils\Exception;

/**
 * Class AmountMismatchException
 *
 * @package PagaMasTarde\ModuleUtils\Exception
 */
class AmountMismatchException extends AbstractException
{
    /**
     * ERROR_MESSAGE
     */
    const ERROR_MESSAGE = 'Amout mismatch error, expected %s and received %s';

    /**
     * AmountMismatchException constructor.
     *
     * @param $expectedAmount
     * @param $currentAmount
     */
    public function __construct($expectedAmount, $currentAmount)
    {
        $this->code = 409;
        $this->message = sprintf(self::ERROR_MESSAGE, $expectedAmount, $currentAmount);

        return parent::__construct($this->getMessage(), $this->getCode());
    }
}
