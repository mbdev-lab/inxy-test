<?php

namespace App\Http\Controllers;

use App\Table;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('table.index')->with('data', Table::orderBy('id', 'desc')->paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('table.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'provider_name' => ['required'],
            'provider' => ['required'],
            'location' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
            'datacenter' => ['required'],
            'brand_label' => ['required'],
            'brand' => ['required'],
            'model' => ['required'],
            'cpu' => ['required'],
            'core' => ['required'],
            'ram' => ['required'],
            'drive_label' => ['required'],
            'drive' => ['required'],
            'show_bw' => ['required'],
            'bandwidth' => ['required'],
            'ip' => ['required'],
            'price' => ['required'],
        ]);
        $model = (new Table($validatedData))->fillBase64()->save();
        return redirect('/crud')->with('success', 'Item has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('table.show')->with('item', Table::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('table.update')->with('item', Table::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'provider_name' => ['required'],
            'provider' => ['required'],
            'location' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
            'datacenter' => ['required'],
            'brand_label' => ['required'],
            'brand' => ['required'],
            'model' => ['required'],
            'cpu' => ['required'],
            'core' => ['required'],
            'ram' => ['required'],
            'drive_label' => ['required'],
            'drive' => ['required'],
            'show_bw' => ['required'],
            'bandwidth' => ['required'],
            'ip' => ['required'],
            'price' => ['required'],
        ]);
        Table::findOrFail($id)->fill($validatedData)->fillBase64()->save();
        return redirect('/crud')->with('success', 'Item has been upd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Table::findOrFail($id)->delete();

        return redirect('/crud')->with('success', 'Item has been delete');
    }
}
