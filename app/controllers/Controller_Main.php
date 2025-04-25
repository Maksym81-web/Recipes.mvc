<?php

class Controller_Main extends Controller_Base
{

    public function action_index() 
    {
        
        $recipes = Recipe::findAll();
        $tags = Tag::findAll();

        // debug($tags);

        $this->render('main/index', ['recipes' => $recipes, 'tags' => $tags]);

        // debug($recipes);
    }

    public function action_recipes() 
    {
        
        $recipes = Recipe::findAll();
        $tags = Tag::findAll();

        // debug($tags);

        $this->render('main/recipes', ['recipes' => $recipes, 'tags' => $tags]);

        // debug($recipes);
    }

    public function action_tags() 
    {
        
        $tags = Tag::findAll();

        // debug($tags);

        $this->render('main/tags', ['tags' => $tags]);

        // debug($recipes);
    }

    public function action_single()
    {
        //debug($_GET);

        $recipe = Recipe::findOne($_GET['id']);

        //debug($recipe);

        $this->render('main/single', ['recipe' => $recipe]);
    }

}