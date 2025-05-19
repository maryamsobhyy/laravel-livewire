<?php

namespace App\Livewire;

use Livewire\Component;

class CreateInline extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            hello inline component
        </div>
        HTML;
    }
}
