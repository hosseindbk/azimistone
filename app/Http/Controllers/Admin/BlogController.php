<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\blogrequest;
use App\Menudashboard;
use App\Submenudashboard;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        $menudashboards = Menudashboard::whereStatus(1)->get();
        $submenudashboards = Submenudashboard::whereStatus(1)->get();
        return view('Admin.blogs.all')
            ->with(compact('blogs'))
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
        $menudashboards = Menudashboard::whereStatus(1)->get();
        $submenudashboards = Submenudashboard::whereStatus(1)->get();

        return view('Admin.blogs.create')
            ->with(compact('menudashboards'))
            ->with(compact('submenudashboards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function action(blogrequest $request)
    {
        $blogs = new Blog();

        $blogs->title = $request->input('title');
        $blogs->description = $request->input('description');
        $blogs->date = Carbon::now()->format('Y M D');
        $blogs->owner = Auth::user()->name;
        if ($request->file('images') != null) {
            $year = Carbon::now()->year;
            $file = $request->file('images');
            $img = Image::make($file);
            $img->insert('images/watermark_logo.png', 'center', 10, 10);
            $imagePath ="images/blogs/{$year}/";
            $imageName = md5(uniqid(rand(), true)) . $file->getClientOriginalName();
            $blogs->images = $file->move($imagePath, $imageName);
            $img->save($imagePath.$imageName);
            $img->encode('jpg');

        }
        $blogs->save();
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

        $menudashboards = Menudashboard::whereStatus(1)->get();
        $submenudashboards = Submenudashboard::whereStatus(1)->get();
        $blogs      = Blog::whereId($id)->get();

        return view('Admin.blogs.edit')
            ->with(compact('menudashboards'))
            ->with(compact('submenudashboards'))
            ->with(compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(blogrequest  $request,Blog $blog)
    {
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->date = Carbon::now()->format('y-m-d');
        $blog->owner = Auth::user()->name;

        if($request->input('status') == 'on'){
            $blog->status = 1;
        }
        if($request->input('status') == null){
            $blog->status = 0;
        }


        if ($request->file('images') != null) {
            $year = Carbon::now()->year;
            $file = $request->file('images');
            $img = Image::make($file);
            $img->insert('images/watermark_logo.png', 'center', 10, 10);
            $imagePath ="images/blogs/{$year}/";
            $imageName = md5(uniqid(rand(), true)) . $file->getClientOriginalName();
            $blog->images = $file->move($imagePath, $imageName);
            $img->save($imagePath.$imageName);
            $img->encode('jpg');

        }
        $blog->update();

        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $blogs = Blog::findOrFail($id);
        $blogs->delete();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت پاک شد');
        return redirect(route('blogs.index'));
    }
}
