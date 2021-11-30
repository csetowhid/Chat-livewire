<?php

namespace App\Http\Livewire;

use App\Http\Requests\Message as RequestsMessage;
use App\Http\Requests\MessageRequest;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Messages extends Component
{
    public $sender;
    public $message;
    public $receiver_id;

    protected $rules = [
        'message' => 'required',
        'receiver_id' => 'required',
    ];
    protected $messages = [
        'message.required' => 'Enter Your Message.',
        'receiver_id.required' => 'Please Select A Receiver.',
    ];
    public function render()
    {
        $data['users'] = User::all();
        $data['sender']=$this->sender;
        return view('livewire.messages',$data);
    }

    public function resetForm()
    {
        $this->message='';
    }

    public function sendMessage()
    {
        $this->validate();

        Message::create([
            'user_id'=> Auth::id(),
            'receiver_id' => $this->sender->id,
            'message' => $this->message,
        ]);

        $this->resetForm();

    }
    public function getUser($userId)
    {
        $user = User::find($userId);
        $this->sender = $user;
    }

    
}
