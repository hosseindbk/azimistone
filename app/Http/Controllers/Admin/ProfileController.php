<?php

namespace App\Http\Controllers\Admin;

use App\Menudashboard;
use App\Submenudashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $menudashboards = Menudashboard::whereStatus(1)->get();
        $submenudashboards = Submenudashboard::whereStatus(1)->get();
        return view('Admin.profile.all')
            ->with(compact('menudashboards'))
            ->with(compact('submenudashboards'));
    }
}
