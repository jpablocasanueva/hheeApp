<?php

namespace App\Livewire;

use App\Livewire\Forms\RegistroForm;
use App\Models\Colaborador;
use Livewire\Component;

class CreateRegistro extends Component
{
    public RegistroForm $form;
    public $colaboradores;
    public $showSuccessIndicator = false;

    public function mount()
    {
        $this->colaboradores = Colaborador::all();
    }
    public function render()
    {
        return view('livewire.create-registro');
    }
}
