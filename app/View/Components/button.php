<?php

namespace App\View\Components;

use Illuminate\View\Component;

class button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     * 
     */
    public $nameButton;
    public $bgButton;
    public $colorText;
    public $hoverBg;
    public function __construct($nameButton, $bgButton, $colorText, $hoverBg)
    {
        $this->nameButton = $nameButton;
        $this->bgButton = $bgButton;
        $this->colorText = $colorText;
        $this->hoverBg = $hoverBg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
