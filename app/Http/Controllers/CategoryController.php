<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index(Request $request){
        $categories = category::query();
        if($request->name) $categories->where('name', $request->name);
        
        return view('categories.index')->with(['categories' => $categories->orderBy('created_at', 'desc')
        ->paginate(10), 'count'=>$categories->count(), ]);

    }
    public function delete($id){
        try{
            category::destroy($id);
            return redirect()->route('categories.index')->with('message', 'Category deleted successfully');
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('categories.index')->with('message', $e->getMessage());
        }
    }

    public function edit($id){
        $categories =category::find($id);
        return view('categories.edit', compact('categories'));
    }
    public function update($id, Request $request){
        $categories =  category::find($id)->update($request->except('remember_token'));
        return redirect()->route('categories.index')->with('message', 'Category'. $request->name.'successfully');
    }
}


