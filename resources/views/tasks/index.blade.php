@extends('tasks.layout')

@section('content')
   <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- New Task Form -->
		    <form action="{{ route('tasks.store') }}"  method="POST">
                        @csrf
                        <!-- Task Name -->
                        <div class="form-group">

                            <div>
                                <input type="text" name="name" class="form-control" placeholder="Task details" value="">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                       
                           
                                <button type="submit" class="btn btn-default" style="background-color:rgb(172, 209, 71)">
                                    <i class="fa fa-btn fa-plus"></i>Add Task
                                </button>
                           
                       
                    </form>
                </div>
            </div>  
<!--
    <div class="row"> 
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Task Manager by Nutanix Calm</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tasks.create') }}">+Add Task</a>
            </div>
        </div>
    </div>
-->
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>

                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
@endsection
