<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Settings;
use App\Models\ArticlesCate;
use App\Models\Articles;
use App\Models\Product;
use App\Models\Backend\Pages;

use Helper, File, Session, DB;

class HomeController extends Controller
{  
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(Request $request)
    {        
        $about = Pages::find(1);
        $settingArr = Settings::whereRaw('1')->lists('value', 'name');
        return view('pages.index', compact('settingArr', 'about'));
    }
    public function lienhe(Request $request)
    {
        $settingArr = Settings::whereRaw('1')->lists('value', 'name');
        return view('pages.lienhe', compact('settingArr'));
    }
    public function loadBox(Request $request)
    {
        $id = $request->id;
        $detail = Product::find($id);        
        return view('pages.load-box', compact('detail'));
    }
    public function detailPrice(Request $request)
    {
        $detail = Articles::find($request->id);
        $settingArr = Settings::whereRaw('1')->lists('value', 'name');
        return view('pages.bang-gia', compact('settingArr', 'detail'));
    }

    public function sanpham(Request $request)
    {
        $settingArr = Settings::whereRaw('1')->lists('value', 'name');
        return view('pages.sanpham', compact('settingArr'));
    }
    public function loaisp($slug, $id)
    {
        $settingArr = Settings::whereRaw('1')->lists('value', 'name');
        $tenloaisp = DB::table('category')->where('slug',$slug)->get();
        $tensp = DB::table('product')->where('cate_id',$id)->get();
        return view('pages.loaisp', compact('tenloaisp', 'tensp', 'settingArr'));
    }
    public function newsList(Request $request)
    {     
        $settingArr = Settings::whereRaw('1')->lists('value', 'name');  
        $slug = $request->slug;
        $cateDetail = ArticlesCate::where('slug' , $slug)->first();

        $title = trim($cateDetail->meta_title) ? $cateDetail->meta_title : $cateDetail->name;
        $cate_id = $cateDetail->id;
        $articlesArr = Articles::where('cate_id', $cate_id)->orderBy('id', 'desc')->paginate(10);

        $hotArr = Articles::where( ['cate_id' => $cate_id, 'is_hot' => 1] )->orderBy('id', 'desc')->limit(5)->get();

        return view('pages.news-list', compact('title', 'hotArr', 'articlesArr', 'settingArr', 'cateDetail'));
    }
    public function chitietsp(Request $request)
    {
        $settingArr = Settings::whereRaw('1')->lists('value', 'name');
        $id = $request->id;

        $chitietsp = DB::table('product')->where('id', $id)->get();        
        
        return view('pages.chitiet', compact('chitietsp', 'settingArr'));
    }
    public function gioithieu(Request $request)
    {
        $about = Pages::find(1);
        $settingArr = Settings::whereRaw('1')->lists('value', 'name');
        return view('pages.gioithieu', compact('settingArr', 'about'));
    }

    public function newsDetail(Request $request)
    {     
        $id = $request->id;
        $settingArr = Settings::whereRaw('1')->lists('value', 'name');
        $detail = Articles::where( 'id', $id )
                ->select('id', 'title', 'slug', 'description', 'image_url', 'content', 'meta_title', 'meta_description', 'meta_keywords', 'custom_text', 'created_at')
                ->first();

        if( $detail ){
            $cateArr = $cateActiveArr = $moviesActiveArr = [];
        
            
            $title = trim($detail->meta_title) ? $detail->meta_title : $detail->title;

            $hotArr = Articles::where( ['cate_id' => 1, 'is_hot' => 1] )->where('id', '<>', $id)->orderBy('id', 'desc')->limit(5)->get();
            $otherArr = Articles::where( ['cate_id' => 1] )->where('id', '<>', $id)->orderBy('id', 'desc')->limit(5)->get();

            return view('pages.news-detail', compact('title',  'hotArr', 'detail', 'otherArr', 'settingArr'));
        }else{
            return view('erros.404');
        }     

        
    }

}
