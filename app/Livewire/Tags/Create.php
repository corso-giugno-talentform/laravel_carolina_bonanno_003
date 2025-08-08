<?php

namespace App\Livewire\Tags;

use App\Models\Tag;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{

    #[Validate('min:3')] // Notation va sempre sopra l'attributo di riferimento, da notare che non c'é il punto e virgola
    public $name = '';

    public function store()
    {
        $this->validate();
        Tag::create([
            'name' => $this->name,
        ]);

        request()->session()->flash('success', 'Elemento correttamente inserito');

        $this->name = '';
    }

    public function render()
    {
        return view('livewire.tags.create');
    }
}
