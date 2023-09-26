<div>
    <form wire:submit="create">
        {{ $this->form }}
        <div class="mt-2 flex justify-end">
            <x-button primary label="Submit" wire:click="create" />
        </div>
    </form>

    <x-filament-actions::modals />
</div>
