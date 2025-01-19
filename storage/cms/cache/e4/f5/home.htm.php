<?php 
class Cms678c0718bda10419430957_7724415b27b7c09e474bf740126a74b9Class extends Cms\Classes\PageCode
{
public function onStart() {
    $page      = Cms\Models\Page::getComponent("/firstwave");
    $this['page'] = $page;
    $this['fade_type'] = Cms\Models\ComponentItem::FADE_TYPE;
}
}
