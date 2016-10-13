<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Album extends Model  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'album';

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
    protected $fillable = ['name', 'slug'];

    public static function getParentCateList( $type ){
        
        $parentCate = Album::orderBy('display_order')
                    ->get();
                    
        return $parentCate;
    }

    public static function getListOrderByKey(){
        $arr = [];
        $tmp = Album::select('name', 'id', 'slug')->get();
        if( $tmp ){
            foreach ($tmp as $key => $value) {
                $arr[$value->id] = ['name' => $value->name, 'slug' => $value->slug];
            }
        }
        return $arr;
    }
    
}
