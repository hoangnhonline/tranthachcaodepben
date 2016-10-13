<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Backend\Tag;
use App\Models\Backend\TagObjects;
use App\Models\Images;
use Helper, File, Session, Auth;

class ImagesController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(Request $request)
    {
        $album_id = isset($request->album_id) ? $request->album_id : 1;      
        
        $query = Images::whereRaw('1');

        if( $album_id > 0){
            $query->where('album_id', $album_id);
        }        
      
        $items = $query->orderBy('id', 'desc')->paginate(20);
        
        $cateArr = Album::all();
        
        return view('backend.images.index', compact( 'items', 'cateArr' , 'album_id', 'title' ));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create(Request $request)
    {

        $cateArr = Album::all();

        $album_id = $request->album_id;

        return view('backend.images.create', compact('cateArr', 'album_id'));
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
            'album_id' => 'required',            
            
        ],
        [            
            'album_id.required' => 'Bạn chưa chọn danh mục',            
            
        ]);       
        
        
        
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

        $rs = Images::create($dataArr);

        $object_id = $rs->id;

        // xu ly tags
        if( !empty( $dataArr['tags'] ) && $object_id ){
            foreach ($dataArr['tags'] as $tag_id) {
                TagObjects::create(['object_id' => $object_id, 'tag_id' => $tag_id, 'type' => 2]);
            }
        }

        Session::flash('message', 'Tạo mới hình ảnh thành công');

        return redirect()->route('images.index',['album_id' => $dataArr['album_id']]);
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

        $detail = Images::find($id);
        
        $cateArr = Album::all();        

        
        
        
        
        

        return view('backend.images.edit', compact('tagSelected', 'detail', 'cateArr' ));
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
            'album_id' => 'required',            
            
        ],
        [            
            'cate_id.required' => 'Bạn chưa chọn danh mục',            
            
        ]);       
        
        
        
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

        $model = Images::find($dataArr['id']);

        $model->update($dataArr);

        
        Session::flash('message', 'Cập nhật hình ảnh thành công');        

        return redirect()->route('images.index', ['album_id' => $dataArr['album_id']]);
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
        $model = Images::find($id);
        $model->delete();

        // redirect
        Session::flash('message', 'Xóa hình ảnh thành công');
        return redirect()->route('images.index');
    }
}
