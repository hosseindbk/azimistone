<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Menu;
use App\Slide;
use App\Submenu;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $slides         = Slide::whereStatus('1')->whereMenu_id('2')->limit('1')->get();
        $menus          = Menu::whereStatus('1')->get();
        $submenus       = Submenu::whereStatus('1')->get();
        $blogs       = Blog::whereStatus('1')->get();
        return view('site.blog')
            ->with(compact('menus'))
            ->with(compact('submenus'))
            ->with(compact('blogs'))
            ->with(compact('slides'));


    }

    public function singleblog($slug)
    {
        $slides         = Slide::whereStatus('1')->whereMenu_id('2')->limit('1')->get();
        $menus          = Menu::whereStatus('1')->get();
        $submenus       = Submenu::whereStatus('1')->get();
        $blogs          = Blog::whereStatus('1')->whereSlug($slug)->get();
        $allblogs          = Blog::whereStatus('1')->get();
        return view('site.singleblog')
            ->with(compact('menus'))
            ->with(compact('submenus'))
            ->with(compact('allblogs'))
            ->with(compact('blogs'))
            ->with(compact('slides'));


    }

}
