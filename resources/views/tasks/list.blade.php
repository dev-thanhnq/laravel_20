@extends('layouts.master')
@section('body')
    <div class="col-sm-offset-2 col-sm-8">
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
                    <tr>
                        <td class="table-text"><div>Làm bài tập Laravel </div></td>
                        <!-- Task Complete Button -->
                        <td>
                            <a href="{{ route('todo.task.complete') }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-check"></i>Hoàn thành
                            </a>
                        </td>
                        <!-- Task Delete Button -->
                        <td>
                            <form action="{{ url('task/1') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-btn fa-trash"></i>Xoá
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-text"><div>Làm bài tập PHP  </div></td>
                        <!-- Task Complete Button -->
                        <td>
                            <a href="{{ route('todo.task.complete') }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-check"></i>Hoàn thành
                            </a>
                        </td>
                        <!-- Task Delete Button -->
                        <td>
                            <form action="{{ url('task/2') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-btn fa-trash"></i>Xoá
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-text"><div><strike>Làm project Laravel </strike></div></td>
                        <!-- Task Complete Button -->
                        <td>
                            <a href="{{ route('todo.task.reset') }}" type="submit" class="btn btn-success">
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
@endsection
