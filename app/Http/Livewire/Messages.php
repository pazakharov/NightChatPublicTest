<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Messages extends Component
{   
    use AuthorizesRequests;

    public $messages;

    

    protected $listeners = ['refreshing' => '$refresh'];
   
    public function render()
    {
        $this->messages = Message::all()->SortByDesc('id', SORT_NATURAL);

        if (Auth::check()){
            if(Auth::user()->id == 1 ) {
               
             $this->messages = Message::withTrashed()->get()->SortByDesc('id', SORT_NATURAL);   
            }
        }        

       
        
        return view('livewire.messages');
    }

    public function trash($id)
    {
        Message::where('id',$id)->delete();
        
        $this->emit('refreshing');

    }
}
