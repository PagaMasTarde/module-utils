<?php
$logObject          = new \stdClass();
$logObject->message = $exceptionMessage->getMessage();
$logObject->code    = $exceptionMessage->getCode();
$logObject->line    = $exceptionMessage->getLine();
$logObject->file    = $exceptionMessage->getFile();
$logObject->trace   = $exceptionMessage->getTraceAsString();