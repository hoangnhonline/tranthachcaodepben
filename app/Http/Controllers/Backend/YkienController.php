<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Ykien;
use Helper, File, Session, Auth;

class YkienController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(Request $request)
    {  
        $items = Ykien::orderBy('display_order')->get();

        return view('backend.ykien.index', compact( 'items'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create()
    {   
        return view('backend.ykien.create');
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
            'content' => 'required',
        ],
        [
            'name.required' => 'Bạn chưa nhập tên',
            'content.required' => 'Bạn chưa nhập nội dung'            
        ]);       

        Ykien::create($dataArr);

        Session::flash('message', 'Tạo mới ý kiến khách hàng thành công');

        return redirect()->route('ykien.index');
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
        $detail = Ykien::find($id);                
        
        return view('backend.ykien.edit', compact( 'detail' ));
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
            'content' => 'required',
        ],
        [
            'name.required' => 'Bạn chưa nhập tên',
            'content.required' => 'Bạn chưa nhập nội dung'            
        ]);      
       
        $model = Ykien::find($dataArr['id']);        

        $model->update($dataArr);

        Session::flash('message', 'Cập nhật ý kiến khách hàng thành công');

        return redirect()->route('ykien.index');
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
        $model = Ykien::find($id);
        $model->delete();

        // redirect
        Session::flash('message', 'Xóa ý kiến khách hàng thành công');
        return redirect()->route('ykien.index');
    }
}
