<?php

namespace App\Http\Controllers;

use App\Models\NamaTandatangan;
use App\Http\Requests\StoreNamaTandatanganRequest;
use App\Http\Requests\UpdateNamaTandatanganRequest;

class NamaTandatanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = NamaTandatangan::all();
        return view('signature.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('signature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNamaTandatanganRequest $request)
    {
        NamaTandatangan::create($request->validated());
        return redirect()->route('signature.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(NamaTandatangan $signature)
    {
        return view('signature.show', compact('signature'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NamaTandatangan $signature)
    {
        return view('signature.edit',compact('signature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNamaTandatanganRequest $request, NamaTandatangan $signature)
    {
        $signature->update($request->validated());
        return redirect()->route('signature.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NamaTandatangan $signature)
    {
        $signature->delete();
        return redirect()->route('signature.index');
    }
}
