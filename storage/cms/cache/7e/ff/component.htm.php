<?php 
use FirstWave\WorkProject\Models\Client;class Cms678fe19945f4d232778724_92934a3cdba0fa9e1178928c0e62769bClass extends Cms\Classes\PartialCode
{
    
public function onStart(){
        $this->prepareVars();
    }
public function prepareVars(){
        $this['clients'] = Client::get();
    }
}
