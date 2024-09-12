<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePizza;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        return view('admin.pizza.index');
    }

    public function create(){
        return view('admin.pizza.create');
    }
    public function store(StorePizza $request){
        if($request->hasFile('file')){
            $file = $request->file('file');
            $path = $file->store('public/files');
        }
        $pizza = new Pizza();
        $pizza->name = $request->name;
        $pizza->size = $request->size;
        $pizza->price = $request->price;
        $pizza->file = $path ?? null;
        $pizza->description = $request->description;
        $pizza->save();
        return redirect()->back();

    }
}
