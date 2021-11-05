<!-- Daily menu section -->
<div class="p-2">

    {{--@if (is_file('storage/files/'.date('d-m-Y').'.pdf'))--}}
{{--    @if (Storage::disk('public')->exists('files/'.date('d-m-Y').'.pdf'))--}}

{{--    <a href="{{ Storage::disk('local')->url('files/'.date('d-m-Y').'.pdf') }}" target="_blank">--}}

        <a href="{{ asset('storage/files/'.date('d-m-Y').'.pdf') }}" target="_blank">
        <button class="relative flex mx-auto mt-4 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg disabled:opacity-50">
            ke stažení ve formátu pdf ( {{ date('d.m.Y') }} )
{{--            @if(Auth::check())
            <a onclick="$openModal('dailyModal')">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute p-2 rounded-full h-10 w-10 -top-5 -right-5 bg-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
            </a>
            @endif--}}
        </button>
    </a>

    @else
        <h1 class="sm:text-2xl font-medium title-font text-gray-900 mb-2">Pro dnešní den není menu k dispozici.</h1>
    @endif

    @if(Auth::check())

            <a onclick="$openModal('dailyModal')">
                <button class="relative flex mx-auto mt-4 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg disabled:opacity-50">
                    Vložit polední menu
                </button>
            </a>

    @endif


    <x-modal wire:model.defer="dailyModal">
            <x-card title="Polední menu">
                <div class="text-gray-600 w-48 p-2">
                    <x-datetime-picker
                        without-time="false"
                        parse-format="DD-MM-YYYY"
                        label="Date"
                        placeholder=""
                        wire:model.defer="date"
                    />

                </div>
                <div class="p-2">
                    <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue">
                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                        </svg>
                        <span class="mt-2 text-base leading-normal">Select a file</span>
                            <!-- File Input -->
                            <input type='file' class="hidden" wire:model.defer="file"/>
                    </label>
                </div>

                <x-slot name="footer">
                    <div class="flex justify-end gap-x-4">
                        <x-button flat label="Zavřít" x-on:click="close" />
                        <x-button primary type="submit" label="Odeslat" wire:click="save"/>
                    </div>
                </x-slot>
            </x-card>

    </x-modal>

</div>
