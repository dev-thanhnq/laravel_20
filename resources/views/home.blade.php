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
                    <form action="{{ url('task')}}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Tên công việc</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

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
{{--                        @foreach($list as $key => $work)--}}
{{--                            <tr>--}}
{{--                                <td class="table-text">--}}
{{--                                    <div>--}}
{{--                                        @if($work == 1)--}}
{{--                                            Làm bài tập Laravel--}}
{{--                                        @elseif($work == 0)--}}
{{--                                            <strike>Làm bài tập Laravel</strike>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <!-- Task Complete Button -->--}}
{{--                                <td>--}}
{{--                                    <a href="{{ route('task.complete') . '/' . $key }}" type="submit" class="btn btn-success">--}}
{{--                                        @if($work == 1)--}}
{{--                                            <i class="fa fa-btn fa-check"></i>Hoàn thành--}}
{{--                                        @elseif($work == 0)--}}
{{--                                            <i class="fa fa-btn fa-refresh"></i>Làm lại--}}
{{--                                        @endif--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                                <!-- Task Delete Button -->--}}
{{--                                <td>--}}
{{--                                    <form action="{{ route('task.destroy') . '/' . $key }}" method="POST">--}}
{{--                                        {{ csrf_field() }}--}}
{{--                                        {{ method_field('DELETE') }}--}}

{{--                                        <button type="submit" class="btn btn-danger">--}}
{{--                                            <i class="fa fa-btn fa-trash"></i>Xoá--}}
{{--                                        </button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
                        <tr>
                            <td class="table-text">
                                <div>
                                    @if($list[0] == 1)
                                        Làm bài tập Laravel
                                    @elseif($list[0] == 0)
                                        <strike>Làm bài tập Laravel</strike>
                                    @endif
                                </div>
                            </td>
                            <!-- Task Complete Button -->
                            <td>
                                <a href="{{ route('task.complete') . '/' . '1' }}" type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-check"></i>Hoàn thành
                                </a>
                            </td>
                            <!-- Task Delete Button -->
                            <td>
                                <form action="{{ route('task.destroy') . '/' . $id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Xoá
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-text">
                                <div>
                                    @if($list[1] == 1)
                                        Làm bài tập PHP
                                    @elseif($list[1] == 0)
                                        <strike>Làm bài tập PHP</strike>
                                    @endif
                                </div>
                            </td>
                            <!-- Task Complete Button -->
                            <td>
                                <a href="{{ route('task.complete') . '/' . '2' }}" type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-check"></i>Hoàn thành
                                </a>
                            </td>
                            <!-- Task Delete Button -->
                            <td>
                                <form action="{{ route('task.destroy') . '/' . $id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Xoá
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-text">
                                <div>
                                    @if($list[2] == 1)
                                        Làm project Laravel
                                    @elseif($list[2] == 0)
                                        <strike>Làm project Laravel</strike>
                                    @endif
                                </div>
                            </td>
                            <!-- Task Complete Button -->
                            <td>
                                <a href="{{ route('task.reComplete') . '/' . '3' }}" type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-refresh"></i>Làm lại
                                </a>
                            </td>
                            <!-- Task Delete Button -->
                            <td>
                                <form action="{{ url('task/3') }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Xoá
                                    </button>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
