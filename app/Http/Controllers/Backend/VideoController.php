<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Video;
use Helper, File, Session, Auth;

class VideoController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(Request $request)
    {  
        $items = Video::orderBy('created_at')->get();        
        
        
        return view('backend.video.index', compact( 'items'));
    }

    public function ajaxListByParent(Request $request)
    {   
        $parent_id = isset($request->parent_id) ? $request->parent_id : 1;        

        $type = isset($request->type) ? $request->type : 'form';        
        
        $items = Video::orderBy('display_order')->get();        
        
        return view('backend.video.ajax-list-by-parent', compact( 'items', 'type' ));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create()
    {         
        $parentCate = Video::orderBy('created_at')->get();

        return view('backend.video.create', compact('parentCate'));
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  Request  $request
    * @return Response
    */
    public function store(Request $request)
    {
       
        $dataArr = $request->all();
        $table = new Video;
        $table->name = $request->name;
        $table->youtube_url = $request->link;
        $table->save();
        $this->validate($request,[
            'name' => 'required',
            'link' => 'required',
        ],
        [
            'name.required' => 'Bạn chưa nhập tên video',
            'link.required' => 'Bạn chưa nhập link',
        ]);       
       
        $dataArr['alias'] = Helper::stripUnicode($dataArr['name']);  
        
        $dataArr['created_user'] = Auth::user()->id;

        $dataArr['updated_user'] = Auth::user()->id;

        

        Session::flash('message', 'Tạo mới video thành công');

        return redirect()->route('video.index');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function show($id)
    {
    //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function edit($id)
    {
        $detail = Video::find($id);

        $parentCateArr = Video::all();
        
        return view('backend.video.edit', compact( 'detail', 'parentCateArr' ));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  Request  $request
    * @param  int  $id
    * @return Response
    */
    public function update(Request $request)
    {
        $dataArr = $request->all();
        
        $this->validate($request,[
            'name' => 'required',
            'link' => 'required',
        ],
        [
            'name.required' => 'Bạn chưa nhập tên video',
            'link.required' => 'Bạn chưa nhập link',
        ]);       

        $dataArr['alias'] = Helper::stripUnicode($dataArr['name']);

        $model = Video::find($dataArr['id']);

        $dataArr['updated_user'] = Auth::user()->id;

        $model->name = $request->name;
        $model->youtube_url =$request->link; 
        $model->save();
        Session::flash('message', 'Cập nhật video thành công');

        return redirect()->route('video.index');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy($id)
    {
        // delete
        $model = Video::find($id);
        $model->delete();

        // redirect
        Session::flash('message', 'Xóa video thành công');
        return redirect()->route('video.index');
    }
}
