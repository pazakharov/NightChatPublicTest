<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Userpanel extends Component
{
    public $users;

    public function render()
    {
        $this->users = User::all();

        return view('livewire.userpanel');
    }

    public function switch_admin_role($user){

            $user = User::where('id',$user['id'])->first();

             if(($user->role == 1) && ($user->id <> 1)) {

            $user->role = 0;

        }else{

            $user->role = 1;
        }


       return $user->save();
    }
}
