<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddMessage extends Component
{
    public $text;

    public function mount(){
       
        $text = '';

    }
   
    public function add()
    {
        Messsage::create([
        'user_id' => auth()->user()->id,
        'text' => $this->text
        ]);
     
        
    }
    public function render()
    {
        return view('livewire.add-message');
    }
}
