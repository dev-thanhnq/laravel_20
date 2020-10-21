@extends('layouts.master')
@section('body')
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Cập nhật công việc
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->

                <!-- New Task Form -->
                <form action="{{ route('task.update', $task->id) }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                {{ method_field('PATCH') }}

                <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Tên công việc</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="{{ $task->name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Nội dung</label>

                        <div class="col-sm-6">
                            <input type="text" name="taskcontent" id="task-name" class="form-control" value="{{ $task->content }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Ưu tiên</label>

                        <div class="col-sm-6">
                            <select name="priority" id="task-name" class="form-control">
                                <option value="0">Bình thường</option>
                                <option value="1">Quan Trọng</option>
                                <option value="2">Khẩn cấp</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Deadline</label>

                        <div class="col-sm-6">
                            <input type="text" name="deadline" id="task-name" class="form-control" value="{{ $task->deadline }}">
                        </div>
                    </div>
                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Cập nhật công việc
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
