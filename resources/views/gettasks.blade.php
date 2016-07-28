@extends('layouts.app')

@section('content')
    <!-- Create Task Form... -->

    <!-- Current Tasks -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{ url('/add') }}">Add New Task</a>
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                    <th>Task</th>
                    <th>Description </th>
                    <th>Image</th>
                    <th>Settings</th>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <a href="{{ url('show/'.$task->id) }}" >   <div>{{ $task->name }}</div></a>
                            </td>
                            <td class="table-text">
                                <div>{{ $task->des }}</div>
                            </td>
                            <td class="table-text">
                              <a href="{{ url('show/'.$task->id) }}" > <img src="{{  url('/images/'.$task->image)}}" style="width:100px;height: 100px"/></a>

                            </td>
                            <td>
                                <a href="{{ url('del/'.$task->id) }}">Delete</a>
                                <a href="{{ url('edit/'.$task->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
