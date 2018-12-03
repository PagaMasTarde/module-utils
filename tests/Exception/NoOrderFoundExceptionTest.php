<?php

namespace Tests\PagaMasTarde\ModuleUtils;

use PagaMasTarde\ModuleUtils\Exception\NoOrderFoundException;

/**
 * Class NoOrderFoundException
 *
 * @package PagaMasTarde\ModuleUtils\Exception
 */
class NoOrderFoundExceptionTest extends AbstractExceptionTest
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
     * testConstructor
     */
    public function testConstructor()
    {
        $exception = new NoOrderFoundException();
        $this->assertEquals(self::ERROR_MESSAGE, $exception->getMessage());
        $this->assertEquals(self::ERROR_CODE, $exception->getCode());
    }

    /**
     * testConstant
     */
    public function testConstant()
    {
        $this->assertEquals(self::ERROR_MESSAGE, NoOrderFoundException::ERROR_MESSAGE);
        $this->assertEquals(self::ERROR_CODE, NoOrderFoundException::ERROR_CODE);
    }
}
