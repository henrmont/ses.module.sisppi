<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use AuthorizesRequests;

    public function getUsers()
    {
        $this->authorize('sisppi/usuário listar');
        $users = User::with(['modules','roles'])->where('id','<>',1)->where('id','<>',auth()->user()->id)->get();
        return response()->json($users, 200);
    }

    public function getUser($id)
    {
        $this->authorize('sisppi/usuário listar');
        $users = User::with(['modules','roles'])->find($id);
        return response()->json($users, 200);
    }
}
