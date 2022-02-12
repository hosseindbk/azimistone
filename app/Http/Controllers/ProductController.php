<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Product;
use App\Prosize;
use App\Size;
use App\Slide;
use App\Submenu;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function singleproduct($slug)
    {
        $slides = Slide::whereStatus('1')->whereMenu_id('2')->limit('1')->get();
        $menus = Menu::whereStatus('1')->get();
        $submenus = Submenu::whereStatus('1')->get();
        $products = product::whereStatus('1')->whereSlug($slug)->get();
        $allproducts = product::whereStatus('1')->get();
        $prosizes = Prosize::whereStatus('1')->get();
        $sizes = Size::whereStatus('1')->get();
        return view('site.singleproduct')
            ->with(compact('menus'))
            ->with(compact('submenus'))
            ->with(compact('prosizes'))
            ->with(compact('sizes'))
            ->with(compact('products'))
            ->with(compact('allproducts'))
            ->with(compact('slides'));


    }

    public function irani()
    {
        $slides = Slide::whereStatus('1')->whereMenu_id('2')->limit('1')->get();
        $menus = Menu::whereStatus('1')->get();
        $submenus = Submenu::whereStatus('1')->get();
        $products = product::whereStatus('1')->wheremenu_id('2')->get();
        return view('site.category')
            ->with(compact('menus'))
            ->with(compact('submenus'))
            ->with(compact('products'))
            ->with(compact('slides'));


    }

    public function singleirani($slug)
    {
        $slides = Slide::whereStatus('1')->whereMenu_id('2')->limit('1')->get();
        $menus = Menu::whereStatus('1')->get();
        $submenus = Submenu::whereStatus('1')->get();
        $submenu_id = Submenu::whereStatus('1')->wheremenu_id('2')->whereSlug($slug)->pluck('id');
        $products = product::whereStatus('1')->wheremenu_id('2')->whereSubmenu_id($submenu_id)->get();
        return view('site.singelcategory')
            ->with(compact('menus'))
            ->with(compact('submenus'))
            ->with(compact('products'))
            ->with(compact('slides'));


    }

    public function khareji()
    {
        $slides = Slide::whereStatus('1')->whereMenu_id('3')->limit('1')->get();
        $menus = Menu::whereStatus('1')->get();
        $submenus = Submenu::whereStatus('1')->get();
        $products = product::whereStatus('1')->wheremenu_id('3')->get();
        return view('site.category')
            ->with(compact('menus'))
            ->with(compact('submenus'))
            ->with(compact('products'))
            ->with(compact('slides'));


    }
    public function singlekhareji($slug)
    {
        $slides = Slide::whereStatus('1')->whereMenu_id('3')->limit('1')->get();
        $menus = Menu::whereStatus('1')->get();
        $submenus = Submenu::whereStatus('1')->get();
        $submenu_id = Submenu::whereStatus('1')->wheremenu_id('3')->whereSlug($slug)->pluck('id');
        $products = product::whereStatus('1')->wheremenu_id('3')->whereSubmenu_id($submenu_id)->get();
        return view('site.singelcategory')
            ->with(compact('menus'))
            ->with(compact('submenus'))
            ->with(compact('products'))
            ->with(compact('slides'));


    }
}
