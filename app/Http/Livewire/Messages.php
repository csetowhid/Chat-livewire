<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Messages extends Component
{
    public $sender;
    public function render()
    {
        $data['users'] = User::all();
        $data['sender']=$this->sender;
        return view('livewire.messages',$data);
    }

    public function getUser($userId)
    {
        $user = User::find($userId);
        $this->sender = $user;
    }
}
