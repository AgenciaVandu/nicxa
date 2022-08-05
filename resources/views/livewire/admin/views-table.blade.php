<div>

    <div class="flex justify-end">
        <div class="mb-4 mx-2">
            <x-jet-label value="Fecha inicio" />
            <x-jet-input type="datetime-local" wire:model="start_date" />
            {{-- Mensaje de error con jetstream --}}
        </div>
        <div class="mb-4 mx-2">
            <x-jet-label value="Fecha fin" />
            <x-jet-input type="datetime-local" wire:model="end_date" />
        </div>
    </div>
    @foreach ($views as $view)
        <div class="flex justify-between p-4">
            <div class="font-bold">
                {{ $view->url }}
            </div>
            <div class="font-bold">
                {{ $view->total }}
            </div>
        </div>
    @endforeach


</div>
