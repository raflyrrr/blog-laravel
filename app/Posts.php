<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Posts extends Model
{
    use SoftDeletes;
    protected $fillable = ['judul','category_id','content','gambar','slug','users_id'];

    public function category(){
        return $this->BelongsTo('App\Category');
    }
    public function tags(){
        return $this->belongsToMany('App\Tags');
    }
    public function users(){
        return $this->belongsto('App\User');
    }
}
