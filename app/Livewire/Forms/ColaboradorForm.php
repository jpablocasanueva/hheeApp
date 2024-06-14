<?php

namespace App\Livewire\Forms;

use App\Models\Colaborador;
use App\Models\Local;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Validation\Rule;

class ColaboradorForm extends Form
{
    #[Validate]
    public $cod_colaborador;
    public $nombre;

    // public $locales;
    public $local_id;


    public function rules()
    {
        return [
            'cod_colaborador' => [
                'required',
                Rule::unique('colaboradors')
            ],
            'nombre' => ['required'],
            'local_id' => ['required']
        ];
    }

    public function create()
    {
        $this->validate();
        Colaborador::create(['nombre' => $this->nombre,
                             'local' => $this->local_id,
                             'cod_colaborador' => $this->cod_colaborador]);
        $this->reset();
    }

}
