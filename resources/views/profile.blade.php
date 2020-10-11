@extends('layouts.master')
@section('body')
    <div class="panel panel-default">
        <div class="panel-heading">
            Thông tin cá nhân
        </div>

        <div class="panel-body">
            <table class="table table-striped task-table">
                <tbody>
                <tr>
                    <td class="table-text"><div>{{ $name }}</div></td>
                </tr>
                <tr>
                    <td class="table-text"><div>{{ $birth }}</div></td>
                </tr>
                <tr>
                    <td class="table-text"><div>{{ $school }}</div></td>
                </tr>
                <tr>
                    <td class="table-text"><div>{{ $home }}</div></td>
                </tr>
                <tr>
                    <td class="table-text"><div>FA</div></td>
                </tr>
                <tr>
                    <td class="table-text"><div>Siêu đại gia</div></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
