<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\servicerequest;
use App\Menudashboard;
use App\Service;
use App\Submenudashboard;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $menudashboards = Menudashboard::whereStatus(1)->get();
        $submenudashboards = Submenudashboard::whereStatus(1)->get();
        return view('Admin.services.all')
            ->with(compact('services'))
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

        return view('Admin.services.create')

            ->with(compact('menudashboards'))
            ->with(compact('submenudashboards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(servicerequest $request)
    {

        $Services = new Service();

        $Services->title = $request->input('title');
        $Services->description = $request->input('description');

        if ($request->file('images') != null) {
            $year = Carbon::now()->year;
            $imagePath ="images/Service/{$year}/";
            $file = $request->file('images');

            $img = Image::make($file);

            $orginalimageName = $file->getClientOriginalName();
            $imageName = md5(uniqid(rand(), true)) . $orginalimageName;

            $Services->images = $file->move($imagePath, $imageName);
            $img->save($imagePath.$imageName);
        }
        $Services->save();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        return redirect(route('services.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = Service::whereId($id)->get();
        $menudashboards = Menudashboard::whereStatus(1)->get();
        $submenudashboards = Submenudashboard::whereStatus(1)->get();
        return view('Admin.services.edit')
            ->with(compact('services'))
            ->with(compact('menudashboards'))
            ->with(compact('submenudashboards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Servicerequest $request, Service $Service)
    {

        $Service->title = $request->input('title');
        $Service->description = $request->input('description');
        if ($request->input('status') == 'on') {
            $Service->status = 1;
        }
        if ($request->input('status') == null) {
            $Service->status = 0;
        }

        if ($request->file('images') != null) {
            $year = Carbon::now()->year;
            $imagePath ="images/Service/{$year}/";
            $file = $request->file('images');

            $img = Image::make($file);

            $orginalimageName = $file->getClientOriginalName();
            $imageName = md5(uniqid(rand(), true)) . $orginalimageName;

            $Service->images = $file->move($imagePath, $imageName);
            $img->save($imagePath.$imageName);
        }
        $Service->update();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        return redirect(route('services.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $Service)
    {
        $Service->delete();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت پاک شد');
        return redirect(route('services.index'));
    }
}
