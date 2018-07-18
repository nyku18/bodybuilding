<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


public function comments()
{

return $this->hasMany('App\Comment', 'id_post', 'id');


}


protected $fillable = ['title', 'body','id_category'];



}
