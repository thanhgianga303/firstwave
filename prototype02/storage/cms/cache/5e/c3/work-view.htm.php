<?php 
use FirstWave\WorkProject\Models\Work;
class Cms618fa1eba77e2631501474_24ca622b819c6fe99233c55ae02c6e18Class extends Cms\Classes\PageCode
{
public function onStart(){
       $this['project'] = Work::where('slug', '=', $this->param('slug'))->first();
    }
}
