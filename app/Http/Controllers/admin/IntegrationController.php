<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Integration;

class IntegrationController extends Controller
{
    public function tracking()
    {
        $trackings = Integration::all();
        return view('admin.integration.tracking');
    }
    public function widgets()
    {
        return view('admin.integration.widgets');
    }
}
