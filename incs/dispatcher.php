<?php

class Dispatcher{

    private $parts = array();
    
    public function __construct(){
        if(isset($_SERVER['PATH_INFO'])){
            // jika menggunakan PATH_INFO
            $path = (substr($_SERVER['PATH_INFO'], -1) == "/") ? 
                substr($_SERVER['PATH_INFO'], 0, -1) : $_SERVER['PATH_INFO'];
        }else{
            // jika menggunakan REQUEST_URI
            $request_uri = str_replace(BASE_URL, '', $_SERVER['REQUEST_URI']);
            $path = (substr($request_uri, -1) == "/") ? 
                substr($request_uri, 0, -1) : $request_uri;
        }
        
        $bits = explode("/", substr($path, 1));
        
        //controller nya
        $parsed['controller'] = array_shift($bits);
        $parsed[] = $parsed['controller'];
        
        //action nya
        $parsed['action'] = array_shift($bits);
        $parsed[] = $parsed['action'];
        
        $parts_size = sizeof($bits);
        if($parts_size % 2 != 0){
            $parts_size -= 1;
        }
        
        for($i = 0; $i < $parts_size; $i += 2){
            $parsed[$bits[$i]] = $bits[$i+1];
            $parsed[] = $bits[$i+1];
        }
        
        if(sizeof($bits) % 2 != 0){
            $parsed[] = array_pop($bits);
        }
        
        $this->parts = $parsed;
    }
    
    //getter
    public function __get($key){
        return $this->parts[$key];
    }
    
    //setter
    public function __set($key, $value){
        $this->parts[$key] = $value;
    }
    
    public function __isset($key){
        return isset($this->parts[$key]);
    }
}