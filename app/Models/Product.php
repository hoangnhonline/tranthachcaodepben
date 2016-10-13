<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'product';

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
    protected $fillable = ['ma_sp', 'name', 'slug', 'alias', 'is_hot', 'status', 'description', 'image_url', 'content', 'meta_title', 'meta_description', 'meta_keywords', 'custom_text', 'cate_id', 'price'];
    
}