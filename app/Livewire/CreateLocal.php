<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;
use App\Livewire\Forms\LocalForm;
use Livewire\Component;

class CreateLocal extends Component
{
    public LocalForm $form;
    public $showSuccessIndicator = false;
    public function render()
    {
        return view('livewire.create-local');
    }

    public function save()
    {
        $this->form->create();
        sleep(1);
        $this->showSuccessIndicator = true;
    }


}
