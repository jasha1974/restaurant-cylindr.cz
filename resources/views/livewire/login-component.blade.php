<div class="py-2">

    <button onclick="$openModal('loginModal')" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
        {{ $button }}</button>

    <x-modal wire:model.defer="loginModal">
        <x-card title="Consent Terms">
            <p class="text-gray-600">
                <x-input wire:model="input" label="Name" placeholder="your name" class="py-2" />
            </p>

            <x-slot name="footer">
                <div class="flex justify-end gap-x-4">
                    <x-button flat label="Cancel" x-on:click="close" />
                    <x-button primary label="I Agree" wire:click="save" />
                </div>
            </x-slot>
        </x-card>
    </x-modal>

</div>
