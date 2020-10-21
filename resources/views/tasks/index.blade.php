@extends('layouts.master')
@section('body')

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thêm công việc mới
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->

                    <!-- New Task Form -->
                    <form action="{{ route('task.create') }}" method="" class="form-horizontal">
                    {{ csrf_field() }}
                    <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Thêm công việc
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách công việc hiện tại
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                        <th>Tên công việc</th>
                        <th>&nbsp;</th>
                        </thead>
                        <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td class="table-text">
                                    <div>
                                        {{ $task->name }}
                                    </div>
                                </td>
                                <!-- Task Complete Button -->
                                @if($task->status == 1)
                                    <td>
                                        <a href="{{ route('task.complete', $task->id) }}" type="submit" class="btn btn-success">
                                            <i class="fa fa-btn fa-check"></i> Hoàn thành
                                        </a>
                                    </td>
                                @elseif($task->status == 2)
                                    <td>
                                        <a href="{{ route('task.reComplete', $task->id) }}" type="submit" class="btn btn-warning">
                                            <i class="fa fa-btn fa-refresh"></i> Làm lại
                                        </a>
                                    </td>
                                @endif
                                {{--                                Task update button--}}
                                <td>
                                    <a href="{{ route('task.show') . '/' . $task->id }}" type="submit" class="btn btn-info">
                                        <i class="fa fa-info-circle" aria-hidden="true"></i> Chi tiết
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('task.edit', $task->id) }}" type="submit" class="btn btn-primary">
                                        <i class="fa fa-pencil" aria-hidden="true"></i> Cập nhật
                                    </a>
                                </td>
                                <!-- Task Delete Button -->
                                <td>
                                    <form action="{{ route('task.destroy') . '/' . $task->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i> Xoá
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
