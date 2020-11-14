<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Messages extends Component
{   
    use AuthorizesRequests;

    public $messages;
   

  

    public function render()
    {
        $this->messages = Message::all();    
        $this->messages->SortByDesc('id',SORT_NATURAL);
        return view('livewire.messages');
    }
}
