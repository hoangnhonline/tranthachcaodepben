<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Backend\Tag;
use App\Models\Backend\TagObjects;
use App\Models\Product;
use Helper, File, Session, Auth;

class ProductController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(Request $request)
    {
        $cate_id = isset($request->cate_id) ? $request->cate_id : 0;

        $title = isset($request->title) && $request->title != '' ? $request->title : '';
        
        $query = Product::whereRaw('1');

        if( $cate_id > 0){
            $query->where('cate_id', $cate_id);
        }
        
        if( $title != ''){
            $query->where('alias', 'LIKE', '%'.$title.'%');
        }
        $items = $query->orderBy('id', 'desc')->paginate(20);
        
        $cateArr = Category::all();
        
        return view('backend.product.index', compact( 'items', 'cateArr' , 'title', 'cate_id' ));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create(Request $request)
    {

        $cateArr = Category::all();
        $cate_id = $request->cate_id;
        $tagArr = Tag::where('type', 2)->orderBy('id', 'desc')->get();

        return view('backend.product.create', compact( 'tagArr', 'cateArr', 'cate_id'));
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
            'cate_id' => 'required',            
            'name' => 'required',            
            'slug' => 'required|unique:product,slug',
            'price' => 'required',
        ],
        [            
            'cate_id.required' => 'Bạn chưa chọn danh mục',            
            'name.required' => 'Bạn chưa nhập tiêu đề',
            'price.required' => 'Bạn chưa nhập giá tiền',            
            'slug.required' => 'Bạn chưa nhập slug',
            'slug.unique' => 'Slug đã được sử dụng.'
        ]);       
        
        $dataArr['alias'] = Helper::stripUnicode($dataArr['name']);
        
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

        $rs = Product::create($dataArr);

        $object_id = $rs->id;

        // xu ly tags
        if( !empty( $dataArr['tags'] ) && $object_id ){
            foreach ($dataArr['tags'] as $tag_id) {
                TagObjects::create(['object_id' => $object_id, 'tag_id' => $tag_id, 'type' => 2]);
            }
        }

        Session::flash('message', 'Tạo mới sản phẩm thành công');

        return redirect()->route('product.index',['cate_id' => $dataArr['cate_id']]);
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

        $detail = Product::find($id);
        
        $cateArr = Category::all();        

        $tmpArr = TagObjects::where(['type' => 1, 'object_id' => $id])->get();
        
        if( $tmpArr->count() > 0 ){
            foreach ($tmpArr as $value) {
                $tagSelected[] = $value->tag_id;
            }
        }
        
        $tagArr = Tag::where('type', 2)->get();

        return view('backend.product.edit', compact('tagArr', 'tagSelected', 'detail', 'cateArr' ));
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
            'cate_id' => 'required',            
            'name' => 'required',
            'price' => 'required',            
            'slug' => 'required|unique:product,slug,'.$dataArr['id'],
        ],
        [            
            'cate_id.required' => 'Bạn chưa chọn danh mục',            
            'name.required' => 'Bạn chưa nhập tiêu đề',
            'price.required' => 'Bạn chưa nhập giá tiền',            
            'slug.required' => 'Bạn chưa nhập slug',
            'slug.unique' => 'Slug đã được sử dụng.'
        ]);       
        
        $dataArr['alias'] = Helper::stripUnicode($dataArr['name']);
        
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

        $model = Product::find($dataArr['id']);

        $model->update($dataArr);

        TagObjects::where(['object_id' => $dataArr['id'], 'type' => 2])->delete();
        // xu ly tags
        if( !empty( $dataArr['tags'] ) ){
            foreach ($dataArr['tags'] as $tag_id) {
                TagObjects::create(['object_id' => $dataArr['id'], 'tag_id' => $tag_id, 'type' => 2]);
            }
        }
        Session::flash('message', 'Cập nhật sản phẩm thành công');        

        return redirect()->route('product.index', ['cate_id' => $dataArr['cate_id']]);
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
        $model = Product::find($id);
        $model->delete();

        // redirect
        Session::flash('message', 'Xóa sản phẩm thành công');
        return redirect()->route('product.index');
    }
}
