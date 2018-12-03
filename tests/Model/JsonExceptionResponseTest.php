<?php

namespace Tests\PagaMasTarde\ModuleUtils;

use PagaMasTarde\ModuleUtils\Exception\ConcurrencyException;
use PagaMasTarde\ModuleUtils\Model\JsonExceptionResponse;
use PagaMasTarde\ModuleUtils\Model\JsonSuccessResponse;

class JsonExceptionResponseTest extends JsonResponseTest
{
    /**
     * testConstructor
     */
    public function testConstructor()
    {
        $jsonSuccessResponse = new JsonSuccessResponse();

        $this->assertEquals($jsonSuccessResponse->getResult(), JsonSuccessResponse::RESULT);
        $this->assertEquals($jsonSuccessResponse->getStatusCode(), JsonSuccessResponse::STATUS_CODE);
    }

    /**
     * testSetException
     */
    public function testSetException()
    {
        $jsonExceptionResponse = new JsonExceptionResponse();
        $jsonExceptionResponse->setException(new ConcurrencyException());

        $this->assertEquals($jsonExceptionResponse->getStatusCode(), ConcurrencyException::ERROR_CODE);
        $this->assertEquals($jsonExceptionResponse->getResult(), ConcurrencyException::ERROR_MESSAGE);
    }
}
