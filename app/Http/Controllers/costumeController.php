<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userModel;
use App\Models\costumeModel;

class costumeController extends Controller
{
    function monitorPage(){
        return view('cosMonitor');
    }

    function createlist(){
        return view('createList');
    }

    function createmon(){
        return view('createMon');
    }

    public function inventorylistPage(Request $request)
    {
        $costumes = costumeModel::all();
        return view('inventory', compact('costumes'));
    }
    public function createlistPost(Request $request)
    {
        $input = $request->all();
        costumeModel::create($input);
        return redirect()->route('inventoryPage')->with('flash_message', 'Costume Added!');
    }
 
}
