<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use App\Models\Process;
use Illuminate\Http\Request;

class ProceesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $proceess = Process::all();
        return view('showprocesses', [
            'proceess' => $proceess
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createprocces');
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

        $audit = Audit::first();
        $audit2 = Audit::where('process_id', $id)->first();

        // dd($audit2);

        return view('auditprocees',[
            'audit' => $audit2
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $process = Process::find($id);


        return view('editprocess', [
            'process' => $process
        ]);
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
