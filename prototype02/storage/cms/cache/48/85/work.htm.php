<?php 
use FirstWave\WorkProject\Models\Category;
class Cms612aeef27f051629040774_c1d1ba02bd93e501a4d6fa5af1519a9dClass extends Cms\Classes\PageCode
{
    public function onStart(){
        $this->prepareVars();
    }
public function prepareVars(){
         $this['categories'] = Category::orderBy('id', 'asc')->get();
    }
}
