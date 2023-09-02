<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormLabelInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $label = '',
        public ?string $name = '',
        public ?string $class = '',
        public ?string $divClass = 'col-md-6 col-12',
        public ?string $value = '',
        public ?string $old = '',
        public $errors = null,
        public ?string $id = '',
        public ?string $required = '',
        public ?string $type = 'text',
        public ?string $attribute = '',
        public bool $hidden = false,

    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.form-label-input');
    }
}
