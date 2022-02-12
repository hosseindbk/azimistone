<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Menu;
use App\Product;
use App\Project;
use App\Slide;
use App\Submenu;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::whereStatus('1')->whereMenu_id('1')->get();
        $menus = Menu::whereStatus('1')->get();
        $products = Product::whereStatus('1')->get();
        $projects = Project::whereStatus('1')->get();
        $submenus = Submenu::whereStatus('1')->get();
        $blogs = Blog::whereStatus('1')->get();
        return view('site.index')
            ->with(compact('menus'))
            ->with(compact('blogs'))
            ->with(compact('projects'))
            ->with(compact('submenus'))
            ->with(compact('products'))
            ->with(compact('slides'));
    }

}
