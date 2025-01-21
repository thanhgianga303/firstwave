<?php 
use FirstWave\WorkProject\Models\Client;class Cms678fe7dfcc3b8033976274_0f28504c8d21b288d54c21eed86de0d2Class extends Cms\Classes\PartialCode
{
    
public function onStart(){
        $this->prepareVars();
    }
public function prepareVars(){
        $this['clients'] =  Client::take(5)->get();
    }
}
