<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;
class Messanger extends Component
{
    public $text;

    public function mount(){
       
        $text = '';

    }
   
    public function add()
    {
       if( Message::create([
        'user_id' => auth()->user()->id,
        'text' => $this->text
        ])        
        ){
           $this->reset();     
            
           $this->emit('refreshing');
        }

     
        
    }
    public function render()
    {
        return view('livewire.messanger');
    }
}