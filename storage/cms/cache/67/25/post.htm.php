<?php 
class Cms5c08d4732af8d820421360_cd26ddcaa6ba462434d795cac64bc427Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
