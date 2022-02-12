<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Product;
use App\Slide;
use App\Submenu;
use Illuminate\Http\Request;

class SortController extends Controller
{
   public function index(){
       $slides = Slide::whereStatus('1')->whereMenu_id('10')->limit('1')->get();
       $menus = Menu::whereStatus('1')->get();
       $products = Product::whereStatus('1')->get();
       $submenus = Submenu::whereStatus('1')->get();
       return view('site.sort')
       ->with(compact('menus'))
       ->with(compact('submenus'))
       ->with(compact('products'))
       ->with(compact('slides'));
   }
}
