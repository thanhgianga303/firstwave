<?php 
use FirstWave\WorkProject\Models\Work;use FirstWave\WorkProject\Models\ProjectDeliverables;use FirstWave\WorkProject\Models\Category;class Cms67894ecd8d04d255192947_81345dd95f5d8ed2ab9e44c898f076cbClass extends Cms\Classes\PageCode
{
    
    
    
public function onStart(){
        $this->prepareVars();
    }
public function prepareVars(){
        $this['works'] = Work::where('status', true)->get();
        $this['categories'] = Category::get();
        $this['project_deliverables'] = ProjectDeliverables::get();
    }
}
