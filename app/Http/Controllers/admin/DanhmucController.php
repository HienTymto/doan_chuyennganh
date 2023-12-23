<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Danhmuc;

class DanhmucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $danhmuc = Danhmuc::all();
        return view("admin.danhmuc", compact('danhmuc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $danhmuc = Danhmuc::all();
        if ($request->isMethod('post')) {
            $request->validate([
                'tendanhmuc' => 'required',
            ]);
            Danhmuc::create([
                'tendm' => $request->input('tendanhmuc'),
            ]);
            return redirect()->back();
        }
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $danhmuc = Danhmuc::find($id);

        $danhmuc->delete();
        return redirect()->back();
    }
}
