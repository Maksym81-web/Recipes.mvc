<?php 

class Controller_Tag extends Controller_Base
{

    public $layout = 'admin';

    public function action_index()
    {
        // debug('works');
        $tags = Tag::findAll();
        
        $this->render("tag/index", ['tags' => $tags]);
    }

    public function action_add()
    {
        if($_POST) {
            //debug($_POST);
            Tag::add
        } else {
            $this->render("tag/add");
        }
        
    }

    
}