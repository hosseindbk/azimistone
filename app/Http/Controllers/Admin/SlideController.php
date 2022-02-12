<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\sliderequest;
use App\Menu;
use App\Menudashboard;
use App\Slide;
use App\Submenu;
use App\Submenudashboard;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submenus = Submenu::whereStatus('1')->get();
        $menus = Menu::whereStatus('1')->get();
        $slides = Slide::all();
        $menudashboards = Menudashboard::whereStatus(1)->get();
        $submenudashboards = Submenudashboard::whereStatus(1)->get();
        return view('Admin.slides.all')
            ->with(compact('submenus'))
            ->with(compact('menus'))
            ->with(compact('slides'))
            ->with(compact('menudashboards'))
            ->with(compact('submenudashboards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $submenus = Submenu::whereStatus('1')->get();
        $menus = Menu::whereStatus('1')->get();
        $slides  = Slide::whereStatus('1')->get();
        $menudashboards = Menudashboard::whereStatus(1)->get();
        $submenudashboards = Submenudashboard::whereStatus(1)->get();
        return view('Admin.slides.create')
            ->with(compact('submenus'))
            ->with(compact('menus'))
            ->with(compact('slides'))
            ->with(compact('menudashboards'))
            ->with(compact('submenudashboards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function action(sliderequest $request)
    {
        $slides = new Slide();

        $slides->title          = $request->input('title');
        $slides->menu_id        = $request->input('menu_id');
        $slides->description    = $request->input('description');

        $image = $request->file('images');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $slides->images = $image->move('images/slide', $new_name);

        $slides->save();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        return response()->json('success');
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
        $slides  = Slide::whereId($id)->get();
        $menus = Menu::whereStatus('1')->get();
        $menudashboards = Menudashboard::whereStatus(1)->get();
        $submenudashboards = Submenudashboard::whereStatus(1)->get();
        return view('Admin.slides.edit')
            ->with(compact('menus'))
            ->with(compact('slides'))
            ->with(compact('menudashboards'))
            ->with(compact('submenudashboards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(sliderequest $request, Slide $slide)
    {
        $slide->title = $request->input('title');
        $slide->description = $request->input('description');
        $slide->menu_id    = $request->input('menu_id');

        if ($request->file('images') != null) {
            $year = Carbon::now()->year;
            $imagePath ="images/slide/{$year}/";
            $file = $request->file('images');
            $orginalimageName = $file->getClientOriginalName();
            $imageName = md5(uniqid(rand(), true)) . $orginalimageName;
            $slide->images = $file->move($imagePath, $imageName);
        }
        if($request->input('status') == 'on'){
            $slide->status = 1;
        }
        if($request->input('status') == null) {
            $slide->status = 0;
        }
        $slide->update();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        return redirect(route('slides.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        $slide->delete();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت پاک شد');
        return redirect(route('slides.index'));
    }
}
