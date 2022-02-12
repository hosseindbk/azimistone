<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\menurequest;
use App\Menu;
use App\Menudashboard;
use App\Submenudashboard;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use UxWeb\SweetAlert\SweetAlert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus      = menu::all();
        $menudashboards = Menudashboard::whereStatus(1)->get();
        $submenudashboards = Submenudashboard::whereStatus(1)->get();

        return view('Admin.menus.all')
            ->with(compact('menudashboards'))
            ->with(compact('submenudashboards'))
            ->with(compact('menus'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menudashboards = Menudashboard::whereStatus(1)->get();
        $submenudashboards = Submenudashboard::whereStatus(1)->get();
        return view('Admin.menus.create')
            ->with(compact('menudashboards'))
            ->with(compact('submenudashboards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(menurequest $request)
    {
        $menus = new menu();

        $menus->title = $request->input('title');
        $menus->description = $request->input('description');
        $menus->keyword = $request->input('tags');


        $menus->save();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        return redirect(route('menus.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menus      = menu::where('id' , '=' , $id)->get();
        $menudashboards = Menudashboard::whereStatus(1)->get();
        $submenudashboards = Submenudashboard::whereStatus(1)->get();




        return view('Admin.menus.edit')
            ->with(compact('menudashboards'))
            ->with(compact('submenudashboards'))
            ->with(compact('menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(menurequest $request, Menu $menu)
    {
        $menu->title = $request->input('title');

        $menu->description = $request->input('description');

        $menu->tags = $request->input('tags');

        if ($request->file('images') != null) {
            $year = Carbon::now()->year;
            $imagePath ="images/menu/{$year}/";
            $file = $request->file('images');

            $img = Image::make($file);

            $orginalimageName = $file->getClientOriginalName();
            $imageName = md5(uniqid(rand(), true)) . $orginalimageName;

            $menu->images = $file->move($imagePath, $imageName);
            $img->save($imagePath.$imageName);
        }


        if($request->input('status') == 'on'){
            $menu->status = 1;
        }

        if($request->input('status') == null) {
            $menu->status = 0;
        }

        $menu->update();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        return redirect(route('menus.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت پاک شد');
        return redirect(route('menus.index'));
    }
}
