<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();
        if ($user->role === 'Admin') {
            return view('dashboard.admin.mahasiswa')->with([
                'user' => Auth::user()
            ]);
        } else if ($user->role === 'Dekanat') {
            return view('dashboard.dekanat.mahasiswa')->with([
                'user' => Auth::user()
            ]);
        } else if ($user->role === 'Prodi') {
            return view('dashboard.prodi.mahasiswa')->with([
                'user' => Auth::user()
            ]);
        } else if ($user->role === 'Tendik') {
            return view('dashboard.tendik.mahasiswa')->with([
                'user' => Auth::user()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        //
    }
}