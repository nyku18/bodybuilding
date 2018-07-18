<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

public function post()
{

 return $this->belongsTo('App\Post', 'id_post');
	
}


protected $fillable = ['body', 'id_user', 'id_post'];

}
