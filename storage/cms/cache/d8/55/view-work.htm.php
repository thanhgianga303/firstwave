<?php 
use FirstWave\WorkProject\Models\Work;class Cms6789528fadf7f782560769_9b43ae5dd19ba6a40c49b0882bb496bdClass extends Cms\Classes\PageCode
{
    
public function onStart(){
       $this['project'] = Work::where('slug', '=', $this->param('slug'))->first();
    }
}
