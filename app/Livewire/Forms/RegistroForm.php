<?php

namespace App\Livewire\Forms;

use App\Models\Registro;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Validation\Rule;

class RegistroForm extends Form
{
    #[Validate]
    public $colaborador = '';
    public $fecha = '';
    public $horaInicio = '';
    public $horaFin = '';
    public $local = '';
    public $motivo = '';
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
        Registro::create();
        $this->reset();
    }
}
