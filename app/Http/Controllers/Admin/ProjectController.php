<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\projectrequest;
use App\Menudashboard;
use App\Project;
use App\Submenudashboard;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects      = Project::all();
        $menudashboards = Menudashboard::whereStatus(1)->get();
        $submenudashboards = Submenudashboard::whereStatus(1)->get();

        return view('Admin.projects.all')
            ->with(compact('menudashboards'))
            ->with(compact('submenudashboards'))
            ->with(compact('projects'));
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

        return view('Admin.projects.create')
            ->with(compact('menudashboards'))
            ->with(compact('submenudashboards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function action(projectrequest $request)
    {
        $projects = new Project();

        $projects->title = $request->input('title');
        $projects->size = $request->input('size');
        $projects->karbord = $request->input('karbord');
        $projects->peymankar = $request->input('peymankar');
        $projects->abad = $request->input('abad');
        $projects->description = $request->input('description');

        if ($request->file('images') != null) {
            $year = Carbon::now()->year;
            $file = $request->file('images');
            $img = Image::make($file);
            $img->insert('images/watermark_project.png', 'center', 10, 10);
            $imagePath ="images/project/{$year}/";
            $imageName = md5(uniqid(rand(), true)) . $file->getClientOriginalName();
            $projects->images = $file->move($imagePath, $imageName);
            $img->save($imagePath.$imageName);
            $img->encode('jpg');
        }

        if ($request->file('images2') != null) {
            $x2=0;
            $y2=0;
            $year2 = Carbon::now()->year;
            $file2 = $request->file('images2');
            $img2 = Image::make($file2);
            $watermarkimg2=Image::make('images/watermark_project.png');
            $filewidth2 = $img2->width();
            $watermarkwidth2 = $watermarkimg2->width();
            $fileheight2 = $img2->height();
            $watermarkheight2 = $watermarkimg2->height();
            while($y2<=$fileheight2){
                $img2->insert('images/watermark_project.png','top-left',($x2 * 2),($y2 * 2));
                $x2+=$watermarkwidth2;
                if($x2>=$filewidth2){
                    $x2=0;
                    $y2+=$watermarkheight2;
                }
            }
            $imagePath2 ="images/project/{$year2}/";
            $imageName2 = md5(uniqid(rand(), true)) . $file2->getClientOriginalName();
            $projects->images2 = $file2->move($imagePath2, $imageName2);
            $img2->save($imagePath2.$imageName2);
            $img2->encode('jpg');

        }
        if ($request->file('images3') != null) {
            $x3=0;
            $y3=0;
            $year3 = Carbon::now()->year;
            $file3 = $request->file('images3');
            $img3 = Image::make($file3);
            $watermarkimg3=Image::make('images/watermark_project.png');
            $filewidth3 = $img3->width();
            $watermarkwidth3 = $watermarkimg3->width();
            $fileheight3 = $img3->height();
            $watermarkheight3 = $watermarkimg3->height();
            while($y3<=$fileheight3){
                $img3->insert('images/watermark_project.png','top-left',($x3 * 2),($y3 * 2));
                $x3+=$watermarkwidth3;
                if($x3>=$filewidth3){
                    $x3=0;
                    $y3+=$watermarkheight3;
                }
            }
            $imagePath3 ="images/project/{$year3}/";
            $imageName3 = md5(uniqid(rand(), true)) . $file3->getClientOriginalName();
            $projects->images3 = $file3->move($imagePath3, $imageName3);
            $img3->save($imagePath3.$imageName3);
            $img3->encode('jpg');

        }
        if ($request->file('images4') != null) {
            $x4=0;
            $y4=0;
            $year4 = Carbon::now()->year;
            $file4 = $request->file('images4');
            $img4 = Image::make($file4);
            $watermarkimg4=Image::make('images/watermark_project.png');
            $filewidth4 = $img4->width();
            $watermarkwidth4 = $watermarkimg4->width();
            $fileheight4 = $img4->height();
            $watermarkheight4 = $watermarkimg4->height();
            while($y4<=$fileheight4){
                $img4->insert('images/watermark_project.png','top-left',($x4 * 2),($y4 * 2));
                $x4+=$watermarkwidth4;
                if($x4>=$filewidth4){
                    $x4=0;
                    $y4+=$watermarkheight4;
                }
            }
            $imagePath4 ="images/project/{$year4}/";
            $imageName4 = md5(uniqid(rand(), true)) . $file4->getClientOriginalName();
            $projects->images4 = $file4->move($imagePath4, $imageName4);
            $img4->save($imagePath4.$imageName4);
            $img4->encode('jpg');

        }
        if ($request->file('images5') != null) {
            $x5=0;
            $y5=0;
            $year5 = Carbon::now()->year;
            $file5 = $request->file('images5');
            $img5 = Image::make($file5);
            $watermarkimg5=Image::make('images/watermark_project.png');
            $filewidth5 = $img5->width();
            $watermarkwidth5 = $watermarkimg5->width();
            $fileheight5 = $img5->height();
            $watermarkheight5 = $watermarkimg5->height();
            while($y5<=$fileheight5){
                $img5->insert('images/watermark_project.png','top-left',($x5 * 2),($y5 * 2));
                $x5+=$watermarkwidth5;
                if($x5>=$filewidth5){
                    $x5=0;
                    $y5+=$watermarkheight5;
                }
            }
            $imagePath5 ="images/project/{$year5}/";
            $imageName5 = md5(uniqid(rand(), true)) . $file5->getClientOriginalName();
            $projects->images5 = $file5->move($imagePath5, $imageName5);
            $img5->save($imagePath5.$imageName5);
            $img5->encode('jpg');

        }
        if ($request->file('images6') != null) {
            $x6=0;
            $y6=0;
            $year6 = Carbon::now()->year;
            $file6 = $request->file('images6');
            $img6 = Image::make($file6);
            $watermarkimg6=Image::make('images/watermark_project.png');
            $filewidth6 = $img6->width();
            $watermarkwidth6 = $watermarkimg6->width();
            $fileheight6 = $img6->height();
            $watermarkheight6 = $watermarkimg6->height();
            while($y6<=$fileheight6){
                $img6->insert('images/watermark_project.png','top-left',($x6 * 2),($y6 * 2));
                $x6+=$watermarkwidth6;
                if($x6>=$filewidth6){
                    $x6=0;
                    $y6+=$watermarkheight6;
                }
            }
            $imagePath6 ="images/project/{$year6}/";
            $imageName6 = md5(uniqid(rand(), true)) . $file6->getClientOriginalName();
            $projects->images6 = $file6->move($imagePath6, $imageName6);
            $img6->save($imagePath6.$imageName6);
            $img6->encode('jpg');

        }

        $projects->save();
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
        $projects      = Project::whereId($id)->get();

        return view('Admin.projects.edit')
            ->with(compact('menudashboards'))
            ->with(compact('submenudashboards'))
            ->with(compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(projectrequest $request, Project $project)
    {

        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->size = $request->input('size');
        $project->karbord = $request->input('karbord');
        $project->peymankar = $request->input('peymankar');
        $project->abad = $request->input('abad');
        $project->pagestatus = $request->input('pagestatus');


        if($request->input('status') == 'on'){
            $project->status = 1;
        }
        if($request->input('status') == null){
            $project->status = 0;
        }
        if ($request->file('images') != null) {
            $year = Carbon::now()->year;
            $file = $request->file('images');
            $img = Image::make($file);
            $img->insert('images/watermark_project.png', 'center', 10, 10);
            $imagePath ="images/project/{$year}/";
            $imageName = md5(uniqid(rand(), true)) . $file->getClientOriginalName();
            $project->images = $file->move($imagePath, $imageName);
            $img->save($imagePath.$imageName);
            $img->encode('jpg');
        }

        if ($request->file('images2') != null) {
            $x2=0;
            $y2=0;
            $year2 = Carbon::now()->year;
            $file2 = $request->file('images2');
            $img2 = Image::make($file2);
            $watermarkimg2=Image::make('images/watermark_project.png');
            $filewidth2 = $img2->width();
            $watermarkwidth2 = $watermarkimg2->width();
            $fileheight2 = $img2->height();
            $watermarkheight2 = $watermarkimg2->height();
            while($y2<=$fileheight2){
                $img2->insert('images/watermark_project.png','top-left',($x2 * 2),($y2 * 2));
                $x2+=$watermarkwidth2;
                if($x2>=$filewidth2){
                    $x2=0;
                    $y2+=$watermarkheight2;
                }
            }
            $imagePath2 ="images/project/{$year2}/";
            $imageName2 = md5(uniqid(rand(), true)) . $file2->getClientOriginalName();
            $project->images2 = $file2->move($imagePath2, $imageName2);
            $img2->save($imagePath2.$imageName2);
            $img2->encode('jpg');

        }
        if ($request->file('images3') != null) {
            $x3=0;
            $y3=0;
            $year3 = Carbon::now()->year;
            $file3 = $request->file('images3');
            $img3 = Image::make($file3);
            $watermarkimg3=Image::make('images/watermark_project.png');
            $filewidth3 = $img3->width();
            $watermarkwidth3 = $watermarkimg3->width();
            $fileheight3 = $img3->height();
            $watermarkheight3 = $watermarkimg3->height();
            while($y3<=$fileheight3){
                $img3->insert('images/watermark_project.png','top-left',($x3 * 2),($y3 * 2));
                $x3+=$watermarkwidth3;
                if($x3>=$filewidth3){
                    $x3=0;
                    $y3+=$watermarkheight3;
                }
            }
            $imagePath3 ="images/project/{$year3}/";
            $imageName3 = md5(uniqid(rand(), true)) . $file3->getClientOriginalName();
            $project->images3 = $file3->move($imagePath3, $imageName3);
            $img3->save($imagePath3.$imageName3);
            $img3->encode('jpg');

        }
        if ($request->file('images4') != null) {
            $x4=0;
            $y4=0;
            $year4 = Carbon::now()->year;
            $file4 = $request->file('images4');
            $img4 = Image::make($file4);
            $watermarkimg4=Image::make('images/watermark_project.png');
            $filewidth4 = $img4->width();
            $watermarkwidth4 = $watermarkimg4->width();
            $fileheight4 = $img4->height();
            $watermarkheight4 = $watermarkimg4->height();
            while($y4<=$fileheight4){
                $img4->insert('images/watermark_project.png','top-left',($x4 * 2),($y4 * 2));
                $x4+=$watermarkwidth4;
                if($x4>=$filewidth4){
                    $x4=0;
                    $y4+=$watermarkheight4;
                }
            }
            $imagePath4 ="images/project/{$year4}/";
            $imageName4 = md5(uniqid(rand(), true)) . $file4->getClientOriginalName();
            $project->images4 = $file4->move($imagePath4, $imageName4);
            $img4->save($imagePath4.$imageName4);
            $img4->encode('jpg');

        }
        if ($request->file('images5') != null) {
            $x5=0;
            $y5=0;
            $year5 = Carbon::now()->year;
            $file5 = $request->file('images5');
            $img5 = Image::make($file5);
            $watermarkimg5=Image::make('images/watermark_project.png');
            $filewidth5 = $img5->width();
            $watermarkwidth5 = $watermarkimg5->width();
            $fileheight5 = $img5->height();
            $watermarkheight5 = $watermarkimg5->height();
            while($y5<=$fileheight5){
                $img5->insert('images/watermark_project.png','top-left',($x5 * 2),($y5 * 2));
                $x5+=$watermarkwidth5;
                if($x5>=$filewidth5){
                    $x5=0;
                    $y5+=$watermarkheight5;
                }
            }
            $imagePath5 ="images/project/{$year5}/";
            $imageName5 = md5(uniqid(rand(), true)) . $file5->getClientOriginalName();
            $project->images5 = $file5->move($imagePath5, $imageName5);
            $img5->save($imagePath5.$imageName5);
            $img5->encode('jpg');

        }
        if ($request->file('images6') != null) {
            $x6=0;
            $y6=0;
            $year6 = Carbon::now()->year;
            $file6 = $request->file('images6');
            $img6 = Image::make($file6);
            $watermarkimg6=Image::make('images/watermark_project.png');
            $filewidth6 = $img6->width();
            $watermarkwidth6 = $watermarkimg6->width();
            $fileheight6 = $img6->height();
            $watermarkheight6 = $watermarkimg6->height();
            while($y6<=$fileheight6){
                $img6->insert('images/watermark_project.png','top-left',($x6 * 2),($y6 * 2));
                $x6+=$watermarkwidth6;
                if($x6>=$filewidth6){
                    $x6=0;
                    $y6+=$watermarkheight6;
                }
            }
            $imagePath6 ="images/project/{$year6}/";
            $imageName6 = md5(uniqid(rand(), true)) . $file6->getClientOriginalName();
            $project->images6 = $file6->move($imagePath6, $imageName6);
            $img6->save($imagePath6.$imageName6);
            $img6->encode('jpg');

        }


        $project->update();

        return redirect(route('projects.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*    public function destroy(Brand $brands)
    {
        $brands->delete();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت پاک شد');
        return redirect(route('brands.index'));
    }*/
    public function destroy($id) {
        $projects = Project::findOrFail($id);
        $projects->delete();
        alert()->success('عملیات موفق', 'اطلاعات با موفقیت پاک شد');
        return redirect(route('projects.index'));
    }
}
