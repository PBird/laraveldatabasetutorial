<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
     use SoftDeletes;    //  burada da use softdeletes kullanıyoruz yoksa çalışmıyor


    // protected $table = 'admin_posts';  // default name of model that is posts

    // protected $primaryKey = 'post_id'    // default id

	protected $dates = ['deleted_at'];  // for soft delete 

    protected $fillable = [
    'title',
    'content'
    ];


    public function user() {

    	return $this->belongsTo('App\User');
    }

    public  function photos() {
        return $this->morphMany('App\Photo','imageable');
    }

}
