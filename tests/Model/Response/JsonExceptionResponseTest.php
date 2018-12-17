<?php

namespace Tests\PagaMasTarde\ModuleUtils\Model\Response;

use PagaMasTarde\ModuleUtils\Exception\AlreadyProcessedException;
use PagaMasTarde\ModuleUtils\Exception\AmountMismatchException;
use PagaMasTarde\ModuleUtils\Exception\ConcurrencyException;
use PagaMasTarde\ModuleUtils\Exception\MerchantOrderNotFoundException;
use PagaMasTarde\ModuleUtils\Exception\NoIdentificationException;
use PagaMasTarde\ModuleUtils\Exception\NoOrderFoundException;
use PagaMasTarde\ModuleUtils\Exception\NoQuoteFoundException;
use PagaMasTarde\ModuleUtils\Exception\UnknownException;
use PagaMasTarde\ModuleUtils\Exception\WrongStatusException;
use PagaMasTarde\ModuleUtils\Model\Response\JsonExceptionResponse;
use PagaMasTarde\ModuleUtils\Model\Response\JsonSuccessResponse;
use PHPUnit\Framework\TestCase;
use Tests\PagaMasTarde\ModuleUtils\AmountMismatchExceptionTest;
use Tests\PagaMasTarde\ModuleUtils\UnknownExceptionTest;
use Tests\PagaMasTarde\ModuleUtils\WrongStatusExceptionTest;

class JsonExceptionResponseTest extends TestCase
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
     * testSetExceptionWithAlreadyProcessedException
     */
    public function testSetExceptionWithAlreadyProcessedException()
    {
        $jsonExceptionResponse = new JsonExceptionResponse();
        $jsonExceptionResponse->setException(new AlreadyProcessedException());

        $this->assertEquals($jsonExceptionResponse->getStatusCode(), AlreadyProcessedException::ERROR_CODE);
        $this->assertEquals($jsonExceptionResponse->getResult(), AlreadyProcessedException::ERROR_MESSAGE);
    }

    /**
     * testSetExceptionWithAmountMismatchException
     */
    public function testSetExceptionWithAmountMismatchException()
    {
        $jsonExceptionResponse = new JsonExceptionResponse();
        $jsonExceptionResponse->setException(
            new AmountMismatchException(
                AmountMismatchExceptionTest::EXPECTED_AMOUNT,
                AmountMismatchExceptionTest::CURRENT_AMOUNT
            )
        );

        $message = sprintf(
            AmountMismatchExceptionTest::ERROR_MESSAGE,
            AmountMismatchExceptionTest::EXPECTED_AMOUNT,
            AmountMismatchExceptionTest::CURRENT_AMOUNT
        );
        $this->assertEquals($jsonExceptionResponse->getStatusCode(), AmountMismatchExceptionTest::ERROR_CODE);
        $this->assertEquals($jsonExceptionResponse->getResult(), $message);
    }

    /**
     * testSetExceptionWithConcurrencyException
     */
    public function testSetExceptionWithConcurrencyException()
    {
        $jsonExceptionResponse = new JsonExceptionResponse();
        $jsonExceptionResponse->setException(new ConcurrencyException());

        $this->assertEquals($jsonExceptionResponse->getStatusCode(), ConcurrencyException::ERROR_CODE);
        $this->assertEquals($jsonExceptionResponse->getResult(), ConcurrencyException::ERROR_MESSAGE);
    }

    /**
     * testSetExceptionWithMerchantOrderNotFoundException
     */
    public function testSetExceptionWithMerchantOrderNotFoundException()
    {
        $jsonExceptionResponse = new JsonExceptionResponse();
        $jsonExceptionResponse->setException(new MerchantOrderNotFoundException());

        $this->assertEquals($jsonExceptionResponse->getStatusCode(), MerchantOrderNotFoundException::ERROR_CODE);
        $this->assertEquals($jsonExceptionResponse->getResult(), MerchantOrderNotFoundException::ERROR_MESSAGE);
    }

    /**
     * testSetExceptionWithNoIdentificationException
     */
    public function testSetExceptionWithNoIdentificationException()
    {
        $jsonExceptionResponse = new JsonExceptionResponse();
        $jsonExceptionResponse->setException(new NoIdentificationException());

        $this->assertEquals($jsonExceptionResponse->getStatusCode(), NoIdentificationException::ERROR_CODE);
        $this->assertEquals($jsonExceptionResponse->getResult(), NoIdentificationException::ERROR_MESSAGE);
    }

    /**
     * testSetExceptionWithNoOrderFoundException
     */
    public function testSetExceptionWithNoOrderFoundException()
    {
        $jsonExceptionResponse = new JsonExceptionResponse();
        $jsonExceptionResponse->setException(new NoOrderFoundException());

        $this->assertEquals($jsonExceptionResponse->getStatusCode(), NoOrderFoundException::ERROR_CODE);
        $this->assertEquals($jsonExceptionResponse->getResult(), NoOrderFoundException::ERROR_MESSAGE);
    }

    /**
     * testSetExceptionWithNoQuoteFoundException
     */
    public function testSetExceptionWithNoQuoteFoundException()
    {
        $jsonExceptionResponse = new JsonExceptionResponse();
        $jsonExceptionResponse->setException(new NoQuoteFoundException());

        $this->assertEquals($jsonExceptionResponse->getStatusCode(), NoQuoteFoundException::ERROR_CODE);
        $this->assertEquals($jsonExceptionResponse->getResult(), NoQuoteFoundException::ERROR_MESSAGE);
    }

    /**
     * testSetExceptionWithUnknownException
     */
    public function testSetExceptionWithUnknownException()
    {
        $jsonExceptionResponse = new JsonExceptionResponse();
        $jsonExceptionResponse->setException(new UnknownException(UnknownExceptionTest::ERROR_DESCRIPTION));

        $message = sprintf(UnknownExceptionTest::ERROR_MESSAGE, UnknownExceptionTest::ERROR_DESCRIPTION);
        $this->assertEquals($jsonExceptionResponse->getStatusCode(), UnknownException::ERROR_CODE);
        $this->assertEquals($jsonExceptionResponse->getResult(), $message);
    }

    /**
     * testSetExceptionWithWrongStatusException
     */
    public function testSetExceptionWithWrongStatusException()
    {
        $jsonExceptionResponse = new JsonExceptionResponse();
        $jsonExceptionResponse->setException(new WrongStatusException(WrongStatusExceptionTest::ERROR_STATUS));

        $message = sprintf(WrongStatusException::ERROR_MESSAGE, WrongStatusExceptionTest::ERROR_STATUS);
        $this->assertEquals($jsonExceptionResponse->getStatusCode(), WrongStatusException::ERROR_CODE);
        $this->assertEquals($jsonExceptionResponse->getResult(), $message);
    }
}
