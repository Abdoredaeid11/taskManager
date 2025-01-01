<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class CreateTask extends Component
{   public $title;
    public $description;
    public $priority;
    public $due_date;
    public $status;

    public function render()
    {
        return view('livewire.create-task');
        
    }

  

    public function submitForm(){
        $this->validate([
        'title'=>  'required' ,
        'description'=>'required', 
        'due_date'=>'required',
        'priority'=>'required',
        'status'=>'required',

        ]);
      


        Task::create([
            'name' => $this->title,
            'description' => $this->description,
            'priority' => $this->priority,
            'due_date' => $this->due_date,
            'status'=>$this->status,

            'user_id' => auth()->id(),
        ]);
        session()->flash('success','Task created successfully!');
        return redirect()->route('task.index');

    }
}
