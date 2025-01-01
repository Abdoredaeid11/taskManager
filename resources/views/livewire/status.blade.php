<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>priority</th>
            <th>Date</th>   
            <th>Status</th>
            <th>Check</th>
        </tr>
    </thead>
    <tbody>
     
        @foreach ($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->name }}</td>
            <td>{{ $task->description }}</td>
            
            <td> <select class="form-control" wire:change="updatePriority({{ $task->id }}, $event.target.value)" wire.:model='priority' name="priority" >
                <option value="Low"{{ $task->priority=='Low'?'selected':''}}>Low</option >
                <option value="Medium"{{ $task->priority=='Medium'?'selected':''}}>Medium</option >
                <option value="High"{{ $task->priority=='High'?'selected':''}}>High</option>
                
            </select></td>
            <td>{{ $task->due_date }}</td>
            <td>
    <select class="form-control" wire:change="updateStatus({{ $task->id }}, $event.target.value)" wire.:model='status' name="status" >
    <option value="Not Started"{{ $task->status=='Not Started'?'selected':''}}>Not Started</option >
    <option value="In Progress"{{ $task->status=='In Progress'?'selected':''}}>In Progress</option >
    <option value="Completed"{{ $task->status=='Completed'?'selected':''}}>Completed</option>
    <option value="Selected"{{ $task->status=='Selected'?'selected':''}}>Selected</option>
    
</select>


<td>
    {!! $task->status == 'Completed' ? 'Done <span style="color: green; font-size: 20px;">&#10003;</span> ' : '' !!}
</td>
    

          
        </tr>
    @endforeach
    </tbody>
</table>