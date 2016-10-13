<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Backend\ArticlesCate;
use App\Models\Backend\Tag;
use App\Models\Backend\TagObjects;
use App\Models\Backend\Pages;
use Helper, File, Session, Auth;

class PagesController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(Request $request)
    {
        

        $title = isset($request->title) && $request->title != '' ? $request->title : '';
        
        $query = Pages::whereRaw('1');

        
        if( $title != ''){
            $query->where('alias', 'LIKE', '%'.$title.'%');
        }
        $items = $query->orderBy('id', 'desc')->paginate(20);
        
        $cateArr = ArticlesCate::all();
        
        return view('backend.pages.index', compact( 'items', 'cateArr' , 'title' ));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create(Request $request)
    {

        $cateArr = ArticlesCate::all();

        $tagArr = Tag::where('type', 2)->orderBy('id', 'desc')->get();

        return view('backend.pages.create', compact( 'tagArr', 'cateArr' ));
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
                        
            'title' => 'required',            
            'slug' => 'required|unique:pages,slug',
        ],
        [            
                        
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'slug.required' => 'Bạn chưa nhập slug',
            'slug.unique' => 'Slug đã được sử dụng.'
        ]);       
        
        $dataArr['alias'] = Helper::stripUnicode($dataArr['title']);
        
        if($dataArr['image_url'] && $dataArr['image_name']){
            
            $tmp = explode('/', $dataArr['image_url']);

            if(!is_dir('uploads/'.date('Y/m/d'))){
                mkdir('uploads/'.date('Y/m/d'), 0777, true);
            }

            $destionation = date('Y/m/d'). '/'. end($tmp);
            
            File::move(config('anhungthinh.upload_path').$dataArr['image_url'], config('anhungthinh.upload_path').$destionation);
            
            $dataArr['image_url'] = $destionation;
        }        
        
        $dataArr['created_user'] = Auth::user()->id;

        $dataArr['updated_user'] = Auth::user()->id;

        $rs = Pages::create($dataArr);

        $object_id = $rs->id;

        // xu ly tags
        if( !empty( $dataArr['tags'] ) && $object_id ){
            foreach ($dataArr['tags'] as $tag_id) {
                TagObjects::create(['object_id' => $object_id, 'tag_id' => $tag_id, 'type' => 2]);
            }
        }

        Session::flash('message', 'Tạo mới trang thành công');

        return redirect()->route('pages.index');
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
        $tagSelected = [];

        $detail = Pages::find($id);
        
        $cateArr = ArticlesCate::all();        

        $tmpArr = TagObjects::where(['type' => 1, 'object_id' => $id])->get();
        
        if( $tmpArr->count() > 0 ){
            foreach ($tmpArr as $value) {
                $tagSelected[] = $value->tag_id;
            }
        }
        
        $tagArr = Tag::where('type', 2)->get();

        return view('backend.pages.edit', compact('tagArr', 'tagSelected', 'detail', 'cateArr' ));
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
                        
            'title' => 'required',            
            'slug' => 'required|unique:pages,slug,'.$dataArr['id'],
        ],
        [            
                        
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'slug.required' => 'Bạn chưa nhập slug',
            'slug.unique' => 'Slug đã được sử dụng.'
        ]);       
        
        $dataArr['alias'] = Helper::stripUnicode($dataArr['title']);
        
        if($dataArr['image_url'] && $dataArr['image_name']){
            
            $tmp = explode('/', $dataArr['image_url']);

            if(!is_dir('uploads/'.date('Y/m/d'))){
                mkdir('uploads/'.date('Y/m/d'), 0777, true);
            }

            $destionation = date('Y/m/d'). '/'. end($tmp);
            
            File::move(config('anhungthinh.upload_path').$dataArr['image_url'], config('anhungthinh.upload_path').$destionation);
            
            $dataArr['image_url'] = $destionation;
        }

        $dataArr['updated_user'] = Auth::user()->id;

        $model = Pages::find($dataArr['id']);

        $model->update($dataArr);

        TagObjects::where(['object_id' => $dataArr['id'], 'type' => 2])->delete();
        // xu ly tags
        if( !empty( $dataArr['tags'] ) ){
            foreach ($dataArr['tags'] as $tag_id) {
                TagObjects::create(['object_id' => $dataArr['id'], 'tag_id' => $tag_id, 'type' => 2]);
            }
        }
        Session::flash('message', 'Cập nhật thông tin trang thành công');        

        return redirect()->route('pages.index');
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
        $model = Pages::find($id);
        $model->delete();

        // redirect
        Session::flash('message', 'Xóa trang thành công');
        return redirect()->route('pages.index');
    }
}
