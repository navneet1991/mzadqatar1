@extends('layouts.app')
@section('title','Show Page')
@section('content')
    @push('scripts')
    <script src="/example.js"></script>
    @endpush
    <!-- Bootstrap Boilerplate... -->
    <div class="panel-body">
        <!-- Display Validation Errors -->

<a href="{{url('/')}}">All Tasks</a>
    <!-- New Task Form -->
<h3>{{$task->name}}</h3>
        <p>{{$task->des}}</p>
        <img src="{{  url('/images/'.$task->image)}}" style="width:500px;height: 400px"/>


    </div>


@endsection