<?php

namespace App\Http\Controllers;

use App\Models\Right;
use Illuminate\Http\Request;

class RightController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $rights = Right::all();
        return view('rights', [
            'rights' => $rights
        ]);
    }
}
