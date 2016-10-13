<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\SystemMetadata;
use Helper, File, Session;

class TagController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(Request $request)
    {     
        
        $type = isset($request->type) ? $request->type : 1;

        $name = isset($request->name) && $request->name != '' ? $request->name : '';

        $query = Tag::where('type', $type);
        if( $name !='' ){
            $query->where('name', 'LIKE', '%'.$name.'%');
        }
        $items = $query->orderBy('id', 'desc')->paginate(50);

        return view('backend.tag.index', compact( 'items', 'type', 'name'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create()
    {
        return view('backend.tag.create');
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
        
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required|unique:tag,slug,NULL,id,type,'.$dataArr['type'],
        ],
        [
            'name.required' => 'Bạn chưa nhập tag',
            'slug.required' => 'Bạn chưa nhập slug',
            'slug.unique' => 'Slug đã được sử dụng.',
        ]);

        $dataArr['alias'] = Helper::stripUnicode($dataArr['name']);
        
        $dataArr['created_user'] = Auth::user()->id;

        $dataArr['updated_user'] = Auth::user()->id;

        $rs = Tag::create($dataArr);
        
        $object_id = $rs->id;

        $metaArr['meta_title'] = $dataArr['meta_title'];
        $metaArr['meta_description'] = $dataArr['meta_description'];
        $metaArr['meta_keywords'] = $dataArr['meta_keywords'];
        $metaArr['custom_text'] = $dataArr['custom_text'];
        
        $rsMeta = SystemMetadata::create( $metaArr );

        if( $rsMeta->id ){
            $modelTag = Tag::find($object_id);
            $modelTag->update(['meta_id' => $rsMeta->id]);
        }
        Session::flash('message', 'Tạo mới tag thành công');

        return redirect()->route('tag.index', [ 'type' => $dataArr['type'] ]);
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
        $detail = Tag::find($id);
        
        $metadata = SystemMetadata::find( $detail->meta_id );

        return view('backend.tag.edit', compact( 'detail', 'metadata'));
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
            'slug' => 'required|unique:tag,slug,'.$dataArr['id'].',id,type,'.$dataArr['type'],
        ],
        [
            'name.required' => 'Bạn chưa nhập tag',
            'slug.required' => 'Bạn chưa nhập slug',
            'slug.unique' => 'Slug đã được sử dụng.',
        ]);
        $dataArr['alias'] = Helper::stripUnicode($dataArr['name']);
        
        $model = Tag::find($dataArr['id']);        

        $dataArr['updated_user'] = Auth::user()->id;

        $model->update($dataArr);

        if( $dataArr['meta_id'] ){

            $metaArr['meta_title'] = $dataArr['meta_title'];
            $metaArr['meta_description'] = $dataArr['meta_description'];
            $metaArr['meta_keywords'] = $dataArr['meta_keywords'];
            $metaArr['custom_text'] = $dataArr['custom_text'];
            $metaArr['id'] = $dataArr['meta_id'];
            $modelMetadata = SystemMetadata::find( $dataArr['meta_id'] );
            $modelMetadata->update( $metaArr );
        }

        Session::flash('message', 'Cập nhật tag thành công');

        return redirect()->route('tag.index', [ 'type' => $dataArr['type'] ]);
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
        $model = Tag::find($id);
        $model->delete();

        // redirect
        Session::flash('message', 'Xóa tag thành công');
        return redirect()->route('tag.index');
    }
}