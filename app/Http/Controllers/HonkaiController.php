<?php

namespace App\Http\Controllers;

use App\Models\valkyrie;
use Illuminate\Http\Request;

class HonkaiController extends Controller
{
    public function valkyrie()
    {
        $data = valkyrie::all();
        return view('valkyrie', $data);
    }
}
