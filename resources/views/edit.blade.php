@extends('template.template')
@section('content')
    <div class="card">

        <div class="card-header">
            <h3>Update Task</h3>
        </div>

        <div class="class-body p-3" >
            <form action="/tasks/{{$task->id}}" method="POST">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="name">Task Name</label>
                    <input type="text" class="form-control" placeholder="Task Name" name="name" value="{{$task->name}}">
                </div>

                <div class="form-group">
                    <label for="date">Date And Time</label>
                    <input class="form-control" type="datetime-local" name="date" id="date" value="{{$task->date}}">
                </div>

                <button  class="btn d-inline">Cancel</button>
                <button type="submit" class="btn btn-dark d-inline">Update</button>
                    
            </form>

        </div>

    </div>
@endsection