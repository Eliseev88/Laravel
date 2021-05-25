<?php

namespace App\View\Components\Blocks;

use Illuminate\View\Component;

class Jumbotron extends Component
{
    public $jumbotronTitle;

    public $jumbotronParagraph;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($jumbotronTitle, $jumbotronParagraph)
    {
        $this->jumbotronParagraph = $jumbotronParagraph;
        $this->jumbotronTitle = $jumbotronTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blocks.jumbotron');
    }
}
