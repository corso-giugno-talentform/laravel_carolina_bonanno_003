<?php

namespace App\Livewire\Tags;

use App\Models\Tag;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public Tag $tag; //Tag di tipo tag diventa attributo -> da passare nella funzione edit
    #[Validate('min:3')]
    public $name; //attributo di cui fare la modifica
    public function mount()
    {
        $this->name = $this->tag->name;
    } //fase iniziale del life cycle hook

    public function update()
    {
        $this->validate();
        $this->tag->update([
            'name' => $this->name,
        ]);

        request()->session()->flash('success', 'Tag aggiornato');
    }

    public function render()
    {
        return view('livewire.tags.edit');
    }
}
