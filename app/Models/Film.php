<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FilmCountry;
use App\Models\FilmCategory;
use App\Models\FilmEpisode;
use App\Models\TagObjects;

class Film extends Model  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'film';

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
    protected $fillable = ['slide', 'meta_id', 'title', 'slug', 'alias', 'description', 'original_title', 'original_slug', 'image_url', 'poster_url', 'duration', 'release_year', 'type', 'cinema', 'content', 'note', 'likes', 'views', 'updated_episode_date', 'status', 'imdb', 'top', 'order', 'expired', 'push_top', 'trailer', 'created_user', 'updated_user', 'quality'];
    
    

    public static function filmCategory( $id )
    {
        $arr = [];
        $rs = FilmCategory::where( 'film_id', $id )->lists('category_id');
        if( $rs ){
            $arr = $rs->toArray();
        }
        return $arr;
    }

    public static function filmCategoryName( $id )
    {
        $arr = [];
        $rs = FilmCategory::where( 'film_id', $id )
                ->join('category', 'category.id', '=', 'film_category.category_id')
                ->select('name', 'id', 'slug')->get();
        if( $rs ){
            $arr = $rs->toArray();
        }
        return $arr;
    }

    public static function filmCountry( $id )
    {
        $arr = [];
        $rs = FilmCountry::where( 'film_id', $id )->lists('country_id');
        if( $rs ){
            $arr = $rs->toArray();
        }
        return $arr;
    }

    public static function filmCountryName( $id )
    {
        $arr = [];
        $rs = FilmCountry::where( 'film_id', $id )
                ->join('country', 'country.id', '=', 'film_country.country_id')
                ->select('name', 'id', 'slug')->get();
        if( $rs ){
            $arr = $rs->toArray();
        }
        return $arr;
    }
    public static function filmTag( $id )
    {
        $arr = [];
        $rs = TagObjects::where( ['type' => 1, 'object_id' => $id] )->lists('tag_id');
        if( $rs ){
            $arr = $rs->toArray();
        }
        return $arr;
    }

    public static function filmCrew(){

        $crewArr = [];

        $tmpCrew = Crew::all();

        foreach( $tmpCrew as $crew ){
            $crewArr[$crew->type][] = $crew;
        }
        return $crewArr;
    }
    public function episodes()
    {
        return $this->hasMany('App\Models\FilmEpisode', 'film_id');
    }

    public static function getFilmHomeTab($table, $id){

        $arr = [];

        if( $table == "category"){
            $query = Film::where('status', 1)
                        ->join('film_category', 'id', '=', 'film_category.film_id');
                        if( $id > 0 ){
                            $query->where('film_category.category_id' , $id);
                        }
                        
            $arr = $query->groupBy('film_id')
                   ->orderBy('id', 'desc')->limit(16)->get();
        }else{
            $query = Film::where('status', 1)
                        ->join('film_country', 'id', '=', 'film_country.film_id');
                    if( $id > 0 ){
                        $query->where('film_country.country_id' , $id);
                    }    
                        
            $arr = $query->groupBy('film_id')
                    ->orderBy('id', 'desc')->limit(16)->get();
        }

        return $arr;
    }
}
