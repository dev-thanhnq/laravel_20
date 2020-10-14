<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        return view('home');
    }

    public function list() {
        return view('tasks.list');
    }

    public function create() {
        return view('tasks.create');
    }

    public function edit() {
        return view('tasks.edit', [
            'name' => 'Làm bài tập Laravel'
        ]);
    }
}
