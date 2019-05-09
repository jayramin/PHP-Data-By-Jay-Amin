<?php

class dataModel {    
    public function __set( $key, $value ) {
        $this->$key = $value;
    } 
}