<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class Status extends Component
{   public $status;
    public $tasks;
    public $task_id;
    public $priority;
    public $task_id2;


    public function mount(){
        $this->tasks=Task::all();

    }

    

    public function updateStatus($task_id,$status){
$this->task_id=$task_id;
$this->status=$status;
$task=Task::find($this->task_id);
$task->status=$this->status;
$task->save();

    }

    public function updatePriority  ($task_id2,$priority){
        $this->task_id2=$task_id2;
        $this->priority=$priority;
        $task=Task::find($this->task_id2);
        $task->priority=$this->priority;
        $task->save();
        
            }

    



    public function render()
    {
        return view('livewire.status');
    }
    public function changeStatus(){


    }
}
