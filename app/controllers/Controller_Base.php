<?php 

class Controller_Base
{
    public $layout = 'public';
    

    public function render($content, $data = null)
    {
        View::render($this->layout, $content, $data);
    }

    public function redirect($url)
    {
        header("Location: /" . $url);
        exit;
    }

    public function back()
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    public function home()
    {
        header("Location: /");
        exit;
    }

    protected function addMessage($result, $key)
    {
        $type = $result ? 'success' : 'error';
        Message::add($type, $key);
        return $this;
    }
}