<?php

namespace App\Livewire;

use App\Livewire\Forms\ColaboradorForm;
use Livewire\Component;
use App\Models\Local;

class CreateColaborador extends Component
{
    public ColaboradorForm $form;
    public $showSuccessIndicator = false;

    public $locales;

    public function render()
    {
        return view('livewire.create-colaborador');
    }

    public function mount()
    {
        $this->locales = Local::all();
    }

    public function save()
    {
        $this->form->create();
        sleep(1);
        $this->showSuccessIndicator = true;
    }
}
