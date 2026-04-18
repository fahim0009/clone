<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visa;

class VisaController extends Controller
{
    public function index()
    {
        $visas = Visa::latest()->get();
        return view('admin.visas.index', compact('visas'));
    }

    public function create()
    {
        return view('admin.visas.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('photo');

        if ($request->hasFile('photo')) {

            $file = $request->file('photo');

            $name = time().'_'.$file->getClientOriginalName();

            $file->move(public_path('uploads/visas'), $name);

            $data['photo'] = $name;
        }

        Visa::create($data);

        return redirect('/admin/visas')
            ->with('success','Visa Saved Successfully');
    }

    public function edit($id)
    {
        $visa = Visa::findOrFail($id);
        return view('admin.visas.edit', compact('visa'));
    }

    public function update(Request $request, $id)
    {
        $visa = Visa::findOrFail($id);
        $visa->update($request->all());

        return redirect('/admin/visas');
    }

    public function destroy($id)
    {
        Visa::findOrFail($id)->delete();

        return back();
    }
}