<?php

namespace App\Http\Controllers;

use App\Models\KepalaSurat;
use App\Http\Requests\StoreKepalaSuratRequest;
use App\Http\Requests\UpdateKepalaSuratRequest;
use App\Models\User;

class KepalaSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = KepalaSurat::all();
        return view('header-mail.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = User::all();
        return view('header-mail.create', ['users' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKepalaSuratRequest $request)
    {
        KepalaSurat::create($request->validated());
        return redirect()->route('headmail.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $data = KepalaSurat::find($id);
        return view('header-mail.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $data = KepalaSurat::find($id);
        
        return view('header-mail.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKepalaSuratRequest $request, String $id)
    {
        $data = KepalaSurat::find($id);
        $data->update($request->validated());
        return redirect()->route('headmail.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $data = KepalaSurat::find($id);
        $data->delete();
        return redirect()->route('headmail.index');
    }
}
