<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Project;
use App\Slide;
use App\Submenu;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::whereStatus('1')->whereMenu_id('5')->limit('1')->get();
        $menus = Menu::whereStatus('1')->get();
        $submenus = Submenu::whereStatus('1')->get();
        $projects = project::whereStatus('1')->get();
        return view('site.project')
            ->with(compact('menus'))
            ->with(compact('submenus'))
            ->with(compact('projects'))
            ->with(compact('slides'));


    }

    public function singleproject($slug)
    {
        $slides = Slide::whereStatus('1')->whereMenu_id('5')->limit('1')->get();
        $menus = Menu::whereStatus('1')->get();
        $submenus = Submenu::whereStatus('1')->get();
        $projects = project::whereStatus('1')->whereSlug($slug)->get();
        $allprojects = project::whereStatus('1')->get();
        return view('site.singleproject')
            ->with(compact('menus'))
            ->with(compact('submenus'))
            ->with(compact('projects'))
            ->with(compact('allprojects'))
            ->with(compact('slides'));


    }

}
