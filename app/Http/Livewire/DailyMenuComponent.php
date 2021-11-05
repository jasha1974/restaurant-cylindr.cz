<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class DailyMenuComponent extends Component
{

    use WithFileUploads;
    use Actions;

    public $dailyModal;
    public $date;
    public $file;

    public function save()
    {

        $this->file->storeAs('public/files', $this->date.'.pdf');
        $this->dailyModal = false;
        $this->notification()->success(
            $title = 'Menu inserted!',
            $description = 'Your daily menu has been updated!'
        );
    }

    public function render()
    {
        return view('livewire.daily-menu-component');
    }
}
