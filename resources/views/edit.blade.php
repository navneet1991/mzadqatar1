@extends('layouts.app')

@section('content')
    <!-- Bootstrap Boilerplate... -->
    <div class="panel-body">
        <!-- Display Validation Errors -->

<a href="{{url('/')}}">ALL Tasks</a>
    <!-- New Task Form -->
        <form action="{{ url('update/'.$task->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}

        <!-- Task Name -->
            <div class="form-group">


                <div class="col-sm-6">
                    <label for="task" class="col-sm-3 control-label">Task : </label>
                    <input type="text" name="name" id="task-name" class="form-control" value="{{$task->name}}">
                </div>
            </div>
            <div class="form-group">


                <div class="col-sm-6">
                    <label for="task" class="col-sm-3 control-label">Description  : </label>
                    <input type="text" name="desc" id="task-name" class="form-control" value="{{$task->des}}">
                </div>
            </div>
            <div class="form-group">


                <div class="col-sm-6">
                    <label for="task" class="col-sm-3 control-label">Days : </label>
                    <input type="text" name="days" id="task-name" class="form-control" value=" {{$task->days}}">
                </div>
                <div class="col-sm-6">
                    <label for="task" class="col-sm-3 control-label">Image : </label>
                    <input type="file" name="photo" id="task-photp" class="form-control" >
                </div>
            </div>


<br>
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>


@endsection