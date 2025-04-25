<?php 

class Controller_Recipe extends Controller_Base
{

    public $layout = 'admin';
    // public function action_view()
    // {
    //     // debug($_GET);
    //     $product = Product::findOne($_GET['id']);
    //     View::render("product/view", ['product' => $product]);
    // }

    public function action_index()
    {
        // debug('works');
        $recipes = Recipe::findAll();
        
        $this->render("recipe/index", ['recipes' => $recipes]);
    }

    
}