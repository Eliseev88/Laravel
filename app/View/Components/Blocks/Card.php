<?php

namespace App\View\Components\Blocks;

use Illuminate\View\Component;

class Card extends Component
{
    public $url;

    public $linkName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $linkName, string $url)
    {
        $this->linkName = $linkName;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blocks.card');
    }
}
