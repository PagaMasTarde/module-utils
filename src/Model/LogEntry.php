<?php

namespace PagaMasTarde\ModuleUtils\Model;

class LogEntry
{
    /**
     * @var string $message
     */
    protected $message;

    /**
     * @var string $code
     */
    protected $code;

    /**
     * @var string $line
     */
    protected $line;

    /**
     * @var string $file
     */
    protected $file;

    /**
     * @var string $trace
     */
    protected $trace;

    /**
     * LogEntry constructor.
     *
     * @param $exception
     */
    public function __construct($exception)
    {
        $this->message = $exception->getMessage();
        $this->code    = $exception->getCode();
        $this->line    = $exception->getLine();
        $this->file    = $exception->getFile();
        $this->trace   = $exception->getTraceAsString();
    }

    /**
     * @return false|string
     */
    public function toJson()
    {
        return json_encode($this, JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
    }
}
