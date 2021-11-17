<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class DeleteeController extends Controller
{
    public function index(){
        $getCategories = Categories::all();

        return view('adminapp.deletee', compact('getCategories'));
    }

    public function destroy($id){
        $getCategori = Categories::find($id);
        $getCategori->delete();
        return redirect()->back();
    }
}
