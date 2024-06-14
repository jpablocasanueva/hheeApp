<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;
use App\Models\Local;

class LocalForm extends Form
{
    #[Validate]
    public $nombre = '';
    public $codigo= '';

    public function rules()
    {
        return [
            'nombre' => ['required'],
            'codigo' => [
                'required',
                Rule::unique('locals')
            ]
            ];
    }

    public function create()
    {
        $this->validate();
        Local::create(['nombre' => $this->nombre, 'codigo' => $this->codigo]);
        $this->reset();
    }
}
