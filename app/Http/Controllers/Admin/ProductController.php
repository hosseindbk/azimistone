<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\productrequest;
use App\Http\Requests\servicerequest;
use App\Menu;
use App\Menudashboard;
use App\Product;
use App\Submenu;
use App\Submenudashboard;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $menudashboards = Menudashboard::whereStatus(1)->get();
        $submenudashboards = Submenudashboard::whereStatus(1)->get();
        return view('Admin.products.all')
            ->with(compact('products'))
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
        $submenus = Submenu::whereStatus('1')->get();
        $menus = Menu::whereStatus('1')->whereSubmenu('1')->get();

        return view('Admin.products.create')
            ->with(compact('menus'))
            ->with(compact('submenus'))
            ->with(compact('menudashboards'))
            ->with(compact('submenudashboards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function action(productrequest $request)
    {

        $products = new Product();

        $products->title = $request->input('title');
        $products->size = $request->input('size');
        $products->karbord = $request->input('karbord');
        $products->sort = $request->input('sort');
        $products->description = $request->input('description');
        $products->submenu_id = $request->input('submenu_id');
        $products->menu_id = $request->input('menu_id');

        if ($request->file('images') != null) {
            $year = Carbon::now()->year;
            $file = $request->file('images');
            $img = Image::make($file);
            $img->insert('images/watermark_logo.png', 'center', 10, 10);
            $imagePath ="images/product/{$year}/";
            $imageName = md5(uniqid(rand(), true)) . $file->getClientOriginalName();
            $products->images = $file->move($imagePath, $imageName);
            $img->save($imagePath.$imageName);
            $img->encode('jpg');

        }
        if ($request->file('images2') != null) {
            $year2 = Carbon::now()->year;
            $file2 = $request->file('images2');
            $img2 = Image::make($file2);
            $img2->insert('images/watermark_logo.png', 'center', 10, 10);
            $imagePath2 ="images/product/{$year2}/";
            $imageName2 = md5(uniqid(rand(), true)) . $file2->getClientOriginalName();
            $products->images2 = $file2->move($imagePath2, $imageName2);
            $img2->save($imagePath2.$imageName2);
            $img2->encode('jpg');
        }
        if ($request->file('images3') != null) {
            $year3 = Carbon::now()->year;
            $file3 = $request->file('images3');
            $img3 = Image::make($file3);
            $img3->insert('images/watermark_logo.png', 'center', 10, 10);
            $imagePath3 ="images/product/{$year3}/";
            $imageName3 = md5(uniqid(rand(), true)) . $file3->getClientOriginalName();
            $products->images3 = $file3->move($imagePath3, $imageName3);
            $img3->save($imagePath3.$imageName3);
            $img3->encode('jpg');
        }
        if ($request->file('images4') != null) {
            $year4 = Carbon::now()->year;
            $file4 = $request->file('images4');
            $img4 = Image::make($file4);
            $img4->insert('images/watermark_logo.png', 'center', 10, 10);
            $imagePath4 ="images/product/{$year4}/";
            $imageName4 = md5(uniqid(rand(), true)) . $file4->getClientOriginalName();
            $products->images4 = $file4->move($imagePath4, $imageName4);
            $img4->save($imagePath4.$imageName4);
            $img4->encode('jpg');
        }
        if ($request->file('images5') != null) {
            $year5 = Carbon::now()->year;
            $file5 = $request->file('images5');
            $img5 = Image::make($file5);
            $img5->insert('images/watermark_logo.png', 'center', 10, 10);
            $imagePath5 ="images/product/{$year5}/";
            $imageName5 = md5(uniqid(rand(), true)) . $file5->getClientOriginalName();
            $products->images5 = $file5->move($imagePath5, $imageName5);
            $img5->save($imagePath5.$imageName5);
            $img5->encode('jpg');
        }
        if ($request->file('images6') != null) {
            $year6 = Carbon::now()->year;
            $file6 = $request->file('images6');
            $img6 = Image::make($file6);
            $img6->insert('images/watermark_logo.png', 'center', 10, 10);
            $imagePath6 ="images/product/{$year6}/";
            $imageName6 = md5(uniqid(rand(), true)) . $file6->getClientOriginalName();
            $products->images6 = $file6->move($imagePath6, $imageName6);
            $img6->save($imagePath6.$imageName6);
            $img6->encode('jpg');
        }

        $products->save();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        return response()->json('success');

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
        $products = Product::whereId($id)->get();
        $submenus = Submenu::whereStatus('1')->get();
        $menus = menu::whereStatus('1')->whereSubmenu('1')->get();
        $menudashboards = Menudashboard::whereStatus(1)->get();
        $submenudashboards = Submenudashboard::whereStatus(1)->get();
        return view('Admin.products.edit')
            ->with(compact('submenus'))
            ->with(compact('menus'))
            ->with(compact('products'))
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
    public function update(productrequest $request, Product $product)
    {

        $product->title     = $request->input('title');
        $product->size      = $request->input('size');
        $product->karbord   = $request->input('karbord');
        $product->sort      = $request->input('sort');
        $product->description   = $request->input('description');
        $product->submenu_id    = $request->input('submenu_id');
        $product->menu_id       = $request->input('menu_id');
        if ($request->input('status') == 'on') {
            $product->status = 1;
        }
        if ($request->input('status') == null) {
            $product->status = 0;
        }
        if ($request->file('images') != null) {
            $year = Carbon::now()->year;
            $file = $request->file('images');
            $img = Image::make($file);
            $img->insert('images/watermark_logo.png', 'center', 10, 10);
            $imagePath ="images/product/{$year}/";
            $imageName = md5(uniqid(rand(), true)) . $file->getClientOriginalName();
            $product->images = $file->move($imagePath, $imageName);
            $img->save($imagePath.$imageName);
            $img->encode('jpg');

        }
        if ($request->file('images2') != null) {
            $year2 = Carbon::now()->year;
            $file2 = $request->file('images2');
            $img2 = Image::make($file2);
            $img2->insert('images/watermark_logo.png', 'center', 10, 10);
            $imagePath2 ="images/product/{$year2}/";
            $imageName2 = md5(uniqid(rand(), true)) . $file2->getClientOriginalName();
            $product->images2 = $file2->move($imagePath2, $imageName2);
            $img2->save($imagePath2.$imageName2);
            $img2->encode('jpg');
        }
        if ($request->file('images3') != null) {
            $year3 = Carbon::now()->year;
            $file3 = $request->file('images3');
            $img3 = Image::make($file3);
            $img3->insert('images/watermark_logo.png', 'center', 10, 10);
            $imagePath3 ="images/product/{$year3}/";
            $imageName3 = md5(uniqid(rand(), true)) . $file3->getClientOriginalName();
            $product->images3 = $file3->move($imagePath3, $imageName3);
            $img3->save($imagePath3.$imageName3);
            $img3->encode('jpg');
        }
        if ($request->file('images4') != null) {
            $year4 = Carbon::now()->year;
            $file4 = $request->file('images4');
            $img4 = Image::make($file4);
            $img4->insert('images/watermark_logo.png', 'center', 10, 10);
            $imagePath4 ="images/product/{$year4}/";
            $imageName4 = md5(uniqid(rand(), true)) . $file4->getClientOriginalName();
            $product->images4 = $file4->move($imagePath4, $imageName4);
            $img4->save($imagePath4.$imageName4);
            $img4->encode('jpg');
        }
        if ($request->file('images5') != null) {
            $year5 = Carbon::now()->year;
            $file5 = $request->file('images5');
            $img5 = Image::make($file5);
            $img5->insert('images/watermark_logo.png', 'center', 10, 10);
            $imagePath5 ="images/product/{$year5}/";
            $imageName5 = md5(uniqid(rand(), true)) . $file5->getClientOriginalName();
            $product->images5 = $file5->move($imagePath5, $imageName5);
            $img5->save($imagePath5.$imageName5);
            $img5->encode('jpg');
        }
        if ($request->file('images6') != null) {
            $year6 = Carbon::now()->year;
            $file6 = $request->file('images6');
            $img6 = Image::make($file6);
            $img6->insert('images/watermark_logo.png', 'center', 10, 10);
            $imagePath6 ="images/product/{$year6}/";
            $imageName6 = md5(uniqid(rand(), true)) . $file6->getClientOriginalName();
            $product->images6 = $file6->move($imagePath6, $imageName6);
            $img6->save($imagePath6.$imageName6);
            $img6->encode('jpg');
        }
        $product->update();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت ثبت شد');
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت پاک شد');
        return redirect(route('products.index'));
    }

    public function option(Request $request){
        $submenus = Submenu::where('menu_id', $request->input('id'))->get();
        $output = [];

        foreach($submenus as $submenu )
        {
            $output[$submenu->id] = $submenu->title;
        }

        return $output;
    }
}
