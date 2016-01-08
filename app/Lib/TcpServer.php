#!/usr/local/bin/php -q
<?php

class TcpServer{
    
    private $address;
    private $port;
    private $sock;
    
    public function __construct ($address, $port) {
        $this->address = $address;
        $this->port = $port;
    }
    
    public function init(){
        error_reporting(E_ALL);
        /* Allow the script to hang around waiting for connections. */
        set_time_limit(0);
        /* Turn on implicit output flushing so we see what we're getting as it comes in. */
        ob_implicit_flush();
    }

    public function create_socket(){
        if (($this->sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) === false) {
            return false;
        }
        return true;
    }
    
    public function bind_socket(){
        if (socket_bind($this->sock, $this->address, $this->port) === false) {
            return false;
        }
        return true;
    }
    
    public function listen_socket(){
        if (socket_listen($this->sock, 5) === false) {
            return false;
        }
        return true;
    }
    
    public function stop_server(){
        socket_close($this->sock);
    }

    public function run(){
        if($this->create_socket()){
            if($this->bind_socket()){
                if(!$this->listen_socket())
                    return;
            }else{
                return;
            }
        }else{
            return;
        }
        do {
            if (($msgsock = socket_accept($this->sock)) === false) {
                break;
            }
    
    /*$msg = "\nWelcome to the PHP Test Server. \n" .
        "To quit, type 'quit'. To shut down the server type 'shutdown'.\n";
    socket_write($msgsock, $msg, strlen($msg));*/

            do {
                    if (false === ($data = socket_read($msgsock, 2048, PHP_NORMAL_READ))) {
                        //echo "socket_read() failed: reason: " . socket_strerror(socket_last_error($msgsock)) . "\n";
                        break 2;
                    }
                    //save data here
                    $talkback = "PHP: You said '$data'.\n";
                    socket_write($msgsock, $talkback, strlen($talkback));
                    echo "$data\n";
                } while (true);
            socket_close($msgsock);
        } while (true);
    }   
}

?>