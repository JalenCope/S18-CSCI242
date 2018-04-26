<?php


class Logger {
    
    private $fd;
    
    public function __construct()
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
    
}
