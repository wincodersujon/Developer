<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index(Request $request)
    {
        $data['getRecord'] = Designation::getRecord($request);
        return view('designations.list', $data);
    }
    public function add(Request $request)
    {
        return view('designations.add');
    }
    public function add_post(Request $request)
    {
        $validatedData = $request->validate([
            'designation_name' => 'required',
        ]);

        $user = new Designation();
        $user->designation_name = trim($validatedData['designation_name']);
        $user->save();

        return redirect('designations')->with('success', 'Designation Successfully Created.');
    }
    public function edit($id)
    {
        $data['getRecord'] = Designation::find($id);
        return view('designations.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $user = $request->validate([
            'designation_name' => 'required',
        ]);
        $user = Designation::find($id);
        $user->designation_name = trim($request->designation_name);
        $user->save();
        return redirect('designations')->with('success', 'Designation Successfully Updated');
    }
    public function delete($id)
    {
        $user = Designation::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'Designation not found');
        }

        $user->delete();

        return redirect()->back()->with('error', 'Designation Successfully Deleted');
    }
}
