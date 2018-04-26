<?php


class LoggerSingleton {
    
    private $fd;
    private static $logger = null;
    
    private function __construct()
    {
        $this->fd = fopen("log.txt", 'a');
    }
    
    public function write($line)
    {
        fwrite($this->fd, $line . "\r\n");
    }
    
    public function __destruct()
    {
        fclose($this->fd);
    }
    
    public static function getInstance()
    {
        if(self::$logger == null)
        {
            self::$logger = new LoggerSingleton();
        }
        return self::$logger;
    }
    
}
