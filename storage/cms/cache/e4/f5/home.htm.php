<?php 
class Cms678fd9b68e033717053450_5c746d85c7f623facab85df540c371b1Class extends Cms\Classes\PageCode
{
public function onStart() {
    $page      = Cms\Models\Page::getComponent("/firstwave");
    $this['page'] = $page;
    $this['fade_type'] = Cms\Models\ComponentItem::FADE_TYPE;
}
}
