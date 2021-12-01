<?php

namespace App\Http\Livewire;

use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Messages extends Component
{
    public $sender;
    public $message;
    public $receiver_id;
    public $allmessages;

    protected $rules = [
        'message' => 'required',
        // 'receiver_id' => 'required',
    ];
    protected $messages = [
        'message.required' => 'Enter Your Message.',
        // 'receiver_id.required' => 'Please Select A Receiver.',
    ];
    public function render()
    {
        $data['users'] = User::all();
        $data['sender']=$this->sender;
        $this->allmessages;
        return view('livewire.messages',$data);
    }

    public function mountdata()
    {
        if(isset($this->sender->id))
        {
              $this->allmessages=Message::where('user_id',auth()->id())->where('receiver_id',$this->sender->id)->orWhere('user_id',$this->sender->id)->where('receiver_id',auth()->id())->orderBy('id','desc')->get();
        }

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
        $this->allmessages=Message::where('user_id',auth()->id())->where('receiver_id',$userId)->orWhere('user_id',$userId)->where('receiver_id',auth()->id())->orderBy('id','desc')->get();
    }

    
}
