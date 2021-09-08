<?php

namespace App\Http\Controllers\Api;

use App\Models\Todo;
use App\Http\Controllers\Controller;
use App\Http\Resources\TodoResource;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        return TodoResource::collection(Todo::orderBy('created_at', 'DESC')->get());
    }

    public function store() {

    }

    public function update() {

    }

    public function destroy() {

    }
}
