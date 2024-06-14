<div>
    <h1 class="mb-4 px-4 mt-2 text-2xl text-slate-700 font-semibold">Agregar Registro</h1>

    <form wire:submit="save" class="min-w-[30rem] flex flex-col gap-6 bg-white rounded-lg shadow p-6">
        <select
            wire:model.blur="form.colaborador"
            @class([
                'px-3 py-2 rounded-lg',
                'border border-slate-300' => $errors->missing('form.colaborador'),
                'border-2 border-red-500' => $errors->has('form.colaborador'),
            ])
            @error('form.local_id')
            <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror

                <option value="" selected disabled>Seleccione Colaborador</option>
                @foreach($colaboradores as $colaborador)
                <option value={{$colaborador->id}}>{{$colaborador->cod_colaborador.' - '.$colaborador->nombre}}</option>
                @endforeach
            </select>

        <label class="flex flex-col gap-2">
            <h3 class="font-medium text-slate-700 text-base">Fecha</h3>

            <input wire:model.blur="form.codigo"
                type="date"
            @class([
                'px-3 py-2 rounded-lg',
                'border border-slate-300' => $errors->missing('form.fecha'),
                'border-2 border-red-500' => $errors->has('form.fecha'),
            ])
            >
            @error('form.fecha')
            <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </label>
        <label class="flex flex-col gap-2">
            <h3 class="font-medium text-slate-700 text-base">Hora Inicio</h3>

            <input wire:model.blur="form.horaInicio"
                type="time"
            @class([
                'px-3 py-2 rounded-lg',
                'border border-slate-300' => $errors->missing('form.horaInicio'),
                'border-2 border-red-500' => $errors->has('form.horaInicio'),
            ])
            >
            @error('form.horaInicio')
            <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </label>
        <label class="flex flex-col gap-2">
            <h3 class="font-medium text-slate-700 text-base">Hora Fin</h3>

            <input wire:model.blur="form.horaFin"
                type="time"
            @class([
                'px-3 py-2 rounded-lg',
                'border border-slate-300' => $errors->missing('form.horaFin'),
                'border-2 border-red-500' => $errors->has('form.horaFin'),
            ])
            >
            @error('form.horaFin')
            <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </label>
        <label class="flex flex-col gap-2">
            <h3 class="font-medium text-slate-700 text-base">Motivo</h3>

            <input wire:model.blur="form.motivo"
            @class([
                'px-3 py-2 rounded-lg',
                'border border-slate-300' => $errors->missing('form.motivo'),
                'border-2 border-red-500' => $errors->has('form.motivo'),
            ])
            placeholder="Motivo"
            >
            @error('form.motivo')
            <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </label>

        <label class="flex">
            <button type="submit" class="relative w-full bg-blue-500 py-3 px-8 rounded-lg text-white font-medium disabled:cursor-not-allowed disabled:opacity-75">
                Guardar

                <div wire:loading.flex wire:target="save" class="flex absolute top-0 right-0 bottom-0 flex items-center pr-4">
                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
            </button>
        </label>
    </form>
    <div
        x-show="$wire.showSuccessIndicator"
        x-transition.out.opacity.duration.2000ms
        x-effect="if($wire.showSuccessIndicator) setTimeout(() => $wire.showSuccessIndicator = false, 3000)"
        class="flex justify-end pt-4"
    >
        <div class="flex gap-2 items-center text-green-500 text-sm font-medium">
            Local creado con exito.
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
    </div>
</div>
