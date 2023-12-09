<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\userModel;
use App\Models\costumelist;
use App\Models\recordlist;

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

    public function createmonPost(Request $request)
    {
        $input = $request->all();
        recordlist::create($input);
        return redirect()->route('monitorPage')->with('flash_message', 'Costume Monitoring Record Created!');
    }

    //Controller for adding list of costumes
    public function inventorylistPage(Request $request)
    {
        $costumes = costumelist::all();
        return view('inventory', ['costumes' => $costumes]);
    }
    
    public function createlistPost(Request $request)
    {
        $input = $request->all();
        costumelist::create($input);
        return redirect()->route('inventoryPage')->with('flash_message', 'Costume Added!');
    }

    //Controller for adding costume monitoring
    public function addMonPage(Request $request)
    {
        $monCostume = recordlist::all();
        return view('cosMonitor', ['monCostume' => $monCostume]);
    }

    //Edit Costume Records
    public function editRecord($id)
    {
        $data = recordlist::findOrFail($id);
        return view('edit', compact('data'));
    }

    public function editRecordPost(Request $request, $id)
    {
        $data = recordlist::findOrFail($id);
        $data->update($request->all());
            
        // Redirect to the monitor page or any other appropriate page after the update
        return redirect()->route('monitorPage')->with('flash_message', 'Costume Updated!');
    }

    public function destroy($id)
    {
        $record = recordlist::findOrFail($id);
        $record->delete();
        return redirect()->route('monitorPage')->with('flash_message', 'Record deleted!');
    }

    //Edit Costume List
    public function editlistPage($id)
    {
        $item = costumelist::findOrFail($id);
        return view('editlist', compact('item'));
    }

    public function editlistPost(Request $request, $id)
    {
        $item = costumelist::findOrFail($id);
        $item->update($request->all());
            
        // Redirect to the monitor page or any other appropriate page after the update
        return redirect()->route('inventoryPage')->with('flash_message', 'Costume Updated!');
    }

    public function destroylist($id)
    {
        $recordlist = costumelist::findOrFail($id);
        $recordlist->delete();
        return redirect()->route('inventoryPage')->with('flash_message', 'Record deleted!');
    }

    function logout(Request $request){
        $request->session()->invalidate();
        Auth::logout();
        return redirect(route('login'));
    }
}
