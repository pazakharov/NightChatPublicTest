<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;


class Trashed extends Component
{
    public $messages;

    protected $listeners = ['refreshing' => '$refresh'];

    public function render()
    {
        $this->messages = Message::onlyTrashed()->get();

        return view('livewire.trashed');
    }

    public function untrash($id){

        Message::where('id', $id)->restore();

        return $this->emit('refreshing');
    }
}
