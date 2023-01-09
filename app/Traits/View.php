<?php

namespace App\Traits;

class View
{
    public function __construct(protected string $view,
    protected array $params = [])
    {}

    public function makeRender()
    {
        $file = __DIR__.'/../../resources/views/'.$this->view.'.php';

        foreach ($this->params as $key => $value) {
            $$key = $value;
        }
        ob_start();

        file_exists($file) ? include($file) : '';
        return ob_get_clean();
    }

    public static function render($view, array $params = [])
    {
        return new static($view, $params);
    }

    public function __toString()
    {
        return $this->makeRender();
    }
}

