<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index(Request $request){
        $users = User::query();
        if($request->name) $users->where('name',$request->name);

        return view('users.index')->with(['users'=>
        $users->orderBy('created_at', 'desc')
        ->paginate(10), 'count'=>$users->count()]);
    }

    public function delete($id){
        try{
            User::destroy($id);
            return redirect()->route('users.index')->with('message', 'User deleted successfully');
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('users.index')->with('message', $e->getMessage());
        }
    }

    public function edit($id){
        $users = User::find($id);
        return view('users.edit', compact('users'));
    }
    public function update($id, Request $request){
        $users =  User::find($id)->update($request->except('remember_token'));
        return redirect()->route('users.index')->with('message', 'User '. $request->name.' successfully Edited');
    }
}



