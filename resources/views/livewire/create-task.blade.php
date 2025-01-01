<div>
    @if($errors->any())
    <div >
    @foreach($errors->all() as $error)
    <p class="alert alert-danger">{{$error}}</p>
    
    @endforeach
    </div>    
    @endif
    
    <form wire:submit.prevent='submitForm' method="POST">
        @csrf <!-- CSRF token for protection -->

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" wire:model.defer='title'  class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            
            <label for="description">Description</label>
            <textarea class="form-control" wire:model.defer='description' id="description" name="description" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="priority">Priority</label>
            <select class="form-control" wire:model.defer='priority' id="priority" name="priority">
                <option value="" >-- Select Priority --</option>
                <option value="Low" >Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>
        </div>

        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" wire:model.defer='due_date' class="form-control" id="due_date" name="due_date" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" wire:model.defer='status' id="status" name="status">
                <option value="" >-- Select Status --</option>
                <option value="Not Started" >Not Started</option>
                <option value="In Progress">In Progress</option>
                <option value="Completed">Completed</option>
                <option value="Selected">Selected</option>

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Task</button>
    </form>
