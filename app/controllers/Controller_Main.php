<?php

class Controller_Main extends Controller_Base
{

    public function action_index() 
    {
        
        $recipes = Recipe::findAll();

        $this->render('main/index', ['recipes' => $recipes]);

        // debug($recipes);
    }

}