<?php

namespace Tests\PagaMasTarde\ModuleUtils;

use PHPUnit\Framework\TestCase;
use PagaMasTarde\ModuleUtils\Model\LogEntry;

class LogEntryTest extends TestCase
{
    /**
     * INFO_MESSAGE
     */
    const INFO_MESSAGE = 'Success message';

    /**
     * ERROR_MESSAGE
     */
    const ERROR_MESSAGE = 'Error message';

    public function testInfo()
    {
        $logEntry = new LogEntry();
        $logEntry->info(self::INFO_MESSAGE);

        $this->assertEquals(self::INFO_MESSAGE, $logEntry->getMessage());
        $this->assertInstanceOf('PagaMasTarde\ModuleUtils\Model\LogEntry', $logEntry);
    }

    public function testError()
    {
        $logEntry = new LogEntry();
        $logEntry->error(new \Exception(self::INFO_MESSAGE));
        
        $reflectCreateOrderMethod = new \ReflectionClass('PagaMasTarde\ModuleUtils\Model\LogEntry');
        $property = $reflectCreateOrderMethod->getProperty('message');
        $property->setAccessible(true);
        $this->assertEquals($property->getValue($logEntry), $logEntry->getMessage());
        
        $property = $reflectCreateOrderMethod->getProperty('code');
        $property->setAccessible(true);
        $this->assertEquals($property->getValue($logEntry), $logEntry->getCode());
        
        $property = $reflectCreateOrderMethod->getProperty('line');
        $property->setAccessible(true);
        $this->assertEquals($property->getValue($logEntry), $logEntry->getLine());
        
        $property = $reflectCreateOrderMethod->getProperty('file');
        $property->setAccessible(true);
        $this->assertEquals($property->getValue($logEntry), $logEntry->getFile());
        
        $property = $reflectCreateOrderMethod->getProperty('trace');
        $property->setAccessible(true);
        $this->assertEquals($property->getValue($logEntry), $logEntry->getTrace());

        $this->assertInstanceOf('PagaMasTarde\ModuleUtils\Model\LogEntry', $logEntry);
    }

    /**
     * @return false|string
     */
    /*public function testToJson()
    {
        $response = $this->jsonSerialize();

        return json_encode($response, JSON_UNESCAPED_SLASHES);
    }*/

    /**
     * @return array
     */
    /*public function testJsonSerialize()
    {
        $arrayProperties = array();

        foreach ($this as $key => $value) {
            if (!empty($value)) {
                $arrayProperties[Str::toSnakeCase($key)] = $value;
            }
        }

        return $arrayProperties;
    }*/
}
