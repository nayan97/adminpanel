<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboradController extends Controller
{
    /**
     * Show Dashborad
     */
    public function ShowDashborad()
    {
        return view('admin.dashborad');
    }
    
}
