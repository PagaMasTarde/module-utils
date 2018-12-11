<?php

namespace Tests\PagaMasTarde\ModuleUtils;

use PagaMasTarde\ModuleUtils\Model\JsonSuccessResponse;
use Tests\PagaMasTarde\ModuleUtils\Model\JsonResponseTest;

class JsonSuccessResponseTest extends JsonResponseTest
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
}
