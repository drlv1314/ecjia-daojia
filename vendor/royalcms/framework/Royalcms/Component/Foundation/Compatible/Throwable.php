<?php

namespace Royalcms\Component\Foundation\Compatible;

interface Throwable {
    /* Methods */
    public function getMessage();
    
    public function getCode();
    
    public function getFile();
    
    public function getLine();
    
    public function getTrace();
    
    public function getTraceAsString();
    
    public function getPrevious();
    
    public function __toString();
    
}