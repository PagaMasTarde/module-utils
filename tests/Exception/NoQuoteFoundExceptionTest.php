<?php

namespace Tests\PagaMasTarde\ModuleUtils;

use PagaMasTarde\ModuleUtils\Exception\NoQuoteFoundException;

/**
 * Class NoQuoteFoundException
 *
 * @package PagaMasTarde\ModuleUtils\Exception
 */
class NoQuoteFoundExceptionTest extends AbstractExceptionTest
{
    /**
     * ERROR_MESSAGE
     */
    const ERROR_MESSAGE = 'No quote found';

    /**
     * ERROR_CODE
     */
    const ERROR_CODE = 429;

    /**
     * testConstructor
     */
    public function testConstructor()
    {
        $exception = new NoQuoteFoundException();
        $this->assertEquals(self::ERROR_MESSAGE, $exception->getMessage());
        $this->assertEquals(self::ERROR_CODE, $exception->getCode());
    }

    /**
     * testConstant
     */
    public function testConstant()
    {
        $this->assertEquals(self::ERROR_MESSAGE, NoQuoteFoundException::ERROR_MESSAGE);
        $this->assertEquals(self::ERROR_CODE, NoQuoteFoundException::ERROR_CODE);
    }
}
