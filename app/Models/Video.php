<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Video extends Model  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'video';

	 /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['youtube_url', 'name'];

    public static function getParentCateList( $type ){
        
        $parentCate = Video::orderBy('display_order')
                    ->get();
                    
        return $parentCate;
    }

    public static function getListOrderByKey(){
        $arr = [];
        $tmp = Video::select('name', 'id', 'youtube_url')->get();
        if( $tmp ){
            foreach ($tmp as $key => $value) {
                $arr[$value->id] = ['name' => $value->name, 'youtube_url' => $value->youtube_url];
            }
        }
        return $arr;
    }
    
}
