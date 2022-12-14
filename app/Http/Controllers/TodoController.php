<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use ProtoneMedia\Splade\Facades\Toast;

class TodoController extends Controller
{
    protected string $api = 'https://63734dd30bb6b698b607eda2.mockapi.io/api/v1/todos';

    public function index()
    {
        return view('todos.index',[
            'data' => [],
        ]);
    }

    public function store(Request $request)
    {
        //
    }
}
