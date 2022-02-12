<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Slide;
use App\Submenu;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::whereStatus('1')->whereMenu_id('20')->limit('1')->get();
        $menus = Menu::whereStatus('1')->get();
        $submenus = Submenu::whereStatus('1')->get();
        return view('site.contact')
            ->with(compact('menus'))
            ->with(compact('submenus'))
            ->with(compact('slides'));
    }


}
